<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_data".
 *
 * @property int $asset_id
 * @property string $entry_date
 * @property double $cash
 * @property double $life_insurance
 * @property double $securities
 * @property double $other_securities
 * @property double $accounts_receivable_good
 * @property double $assets_conv_to_cash
 * @property double $total_current_assets
 * @property double $real_estate
 * @property double $mortages_owned
 * @property double $accounts_receivable_doubt
 * @property double $notes_relatives_friends
 * @property double $personal_property
 * @property double $other_assets

 * @property double $dividends_interest
 * @property double $rental_income_net
 * @property double $other_income
 * @property double $other_persons_salary
 * @property double $other_income_other_person
 * @property string $assets_pledged
 * @property string $defendent_in_suit
 * @property string $bankruptcy_declared
 * @property double $notes_to_banks
 * @property double $notes_to_relatives
 * @property double $notes_to_others
 * @property double $accounts_payable
 * @property double $unpaid_income_tax
 * @property double $other_unpaid_tax
 * @property double $loans_on_life_insurance
 * @property double $contract_accounts_payable
 * @property double $cash_rent_owed
 * @property double $other_liabilties
 * @property double $mortgage_payable
 * @property double $liens_payable
 * @property double $other_debts
 * @property double $net_worth
 * @property double $total_net_worth
 * @property double $income_taxes
 * @property double $other_taxes
 * @property double $insurance_premiums
 * @property double $mortgage_premiums
 * @property double $rent_payable
 * @property double $other_expenses
 * @property string $endorser_liability
 * @property string $lease_contract_liability
 * @property string $legal_claim_liablility
 * @property string $income_tax_liability
 * @property string $other_liability
 */
class UserData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['asset_id'], 'integer'],
            [['entry_date'], 'safe'],
            [['cash', 'life_insurance', 'securities', 'other_securities', 'accounts_receivable_good', 'assets_conv_to_cash', 'total_current_assets', 'real_estate', 'mortages_owned', 'accounts_receivable_doubt', 'notes_relatives_friends', 'personal_property', 'other_assets', 'total_assets', 'notes_to_banks', 'notes_to_relatives', 'notes_to_others', 'accounts_payable', 'unpaid_income_tax', 'other_unpaid_tax', 'loans_on_life_insurance', 'contract_accounts_payable', 'cash_rent_owed', 'other_liabilities', 'mortgage_payable', 'liens_payable', 'other_debts', 'net_worth', 'total_net_worth'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'asset_id' => 'Asset ID',
            'entry_date' => 'Entry Date',
            'cash' => 'Cash on Hand & in Banks',
            'life_insurance' => 'Life Insurance (Cash Value)',
            'securities' => 'U.S. Gov. Securities',
            'other_securities' => 'Other Marketable Securities',
            'accounts_receivable_good' => 'Notes & Accounts Receivable(Good)',
            'assets_conv_to_cash' => 'Other Assets Readily Converted To Cash',
            'total_current_assets' => 'Total Current Assets',
            'real_estate' => 'Real Estate Owned',
            'mortages_owned' => 'Mortages & Contracts Owned',
            'accounts_receivable_doubt' => 'Notes & Accounts Receivable(Doubt)',
            'notes_relatives_friends' => 'Notes Due from Relatives & Friends',
			'other_securities_not_marketable' => 'Other Securities Not Readily Marketable',
            'personal_property' => 'Personal Property',
            'other_assets' => 'Other Assets',
			'total_assets' => 'Total Assets',
            'notes_to_banks' => 'Notes Due To Banks',
            'notes_to_relatives' => 'Notes Due To Relatives & Friends',
            'notes_to_others' => 'Notes Due To Others',
            'accounts_payable' => 'Accounts & Bills Payable',
            'unpaid_income_tax' => 'Unpaid Income Tax Due',
            'other_unpaid_tax' => 'Other Unpaid Taxes & Interest',
            'loans_on_life_insurance' => 'Loans On Life Insurance Policies',
            'contract_accounts_payable' => 'Contract Accounts Payable',
            'cash_rent_owed' => 'Cash Rent Owed',
            'other_liabilties' => 'Other Liabilties Due', 
			'total_current_liabilities' => 'Total Current Liabilities',
            'mortgage_payable' => 'Real Estate Mortgage Payable',
            'liens_payable' => 'Liens & Assessments Payable',
            'other_debts' => 'Other Debts',
			'total_liabilities' => 'Total Liablilities',
            'net_worth' => 'Net Worth',
            'total_net_worth' => 'Total Liabilities & Net Worth',

        ];
    }
	
	public function afterFind() {

        parent::afterFind();


        $this->total_current_assets = $this->cash + 
									  $this->life_insurance +
									  $this->securities +
									  $this->other_securities +
									  $this->accounts_receivable_good +
									  $this->assets_conv_to_cash;
		$this->total_assets = $this->cash + 
									  $this->life_insurance +
									  $this->securities +
									  $this->other_securities +
									  $this->accounts_receivable_good +
									  $this->assets_conv_to_cash +
									  $this->real_estate +
									  $this->mortages_owned +
									  $this->accounts_receivable_doubt +
									  $this->notes_relatives_friends +
									  $this->other_securities_not_marketable +
									  $this->personal_property +
									  $this->real_estate +
									  $this->real_estate +
									  $this->other_assets;
		$this->total_current_liabilities = 	$this->notes_to_banks +
											$this->notes_to_relatives +
											$this->notes_to_others +
											$this->accounts_payable +
											$this->unpaid_income_tax +
											$this->other_unpaid_tax +
											$this->loans_on_life_insurance +
											$this->contract_accounts_payable +
											$this->cash_rent_owed +
											$this->other_liabilities;
		$this->total_liabilities = $this->notes_to_banks +
									$this->notes_to_relatives +
									$this->notes_to_others +
									$this->accounts_payable +
									$this->unpaid_income_tax +
									$this->other_unpaid_tax +
									$this->loans_on_life_insurance +
									$this->contract_accounts_payable +
									$this->cash_rent_owed +
									$this->other_liabilities +
									$this->mortgage_payable +
									$this->liens_payable +
									$this->other_debts;
		$this->net_worth = $this->total_assets - $this->total_liabilities;
		$this->total_net_worth = $this->net_worth;
    }
}
