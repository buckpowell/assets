<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_data".
 *
 * @property int $asset_id
 * @property string $entry_date
 * @property double $cash
 * @property double $certificates_of_deposit
 * @property double $life_insurance
 * @property double $securities
 * @property double $other_securities
 * @property double $accounts_receivable_good
 * @property double $assets_conv_to_cash
 * @property double $other_investments
 * @property double $total_current_assets
 * @property double $real_estate
 * @property double $mortages_owned
 * @property double $accounts_receivable_doubt
 * @property double $notes_relatives_friends
 * @property double $other_securities_not_marketable
 * @property double $personal_property
 * @property double $other_assets
 * @property double $total_assets
 * @property double $notes_to_banks
 * @property double $notes_to_relatives
 * @property double $notes_to_others
 * @property double $accounts_payable
 * @property double $unpaid_income_tax
 * @property double $other_unpaid_tax
 * @property double $loans_on_life_insurance
 * @property double $contract_accounts_payable
 * @property double $cash_rent_owed
 * @property double $other_liabilities
 * @property double $total_current_liabilities
 * @property double $mortgage_payable
 * @property double $liens_payable
 * @property double $other_debts
 * @property double $total_liabilities
 * @property double $net_worth
 *
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
            [['asset_id'], 'required'],
            [['asset_id'], 'integer'],
            [['entry_date'], 'safe'],
            [['cash', 'certificates_of_deposit', 'life_insurance', 'securities', 'other_securities', 'accounts_receivable_good', 'assets_conv_to_cash', 'other_investments','total_current_assets', 'real_estate', 'mortgages_owned', 'accounts_receivable_doubt', 'notes_relatives_friends', 'other_securities_not_marketable', 'personal_property', 'other_assets', 'total_assets', 'notes_to_banks', 'notes_to_relatives', 'notes_to_others', 'accounts_payable', 'unpaid_income_tax', 'other_unpaid_tax', 'loans_on_life_insurance', 'contract_accounts_payable', 'cash_rent_owed', 'other_liabilities', 'total_current_liabilities', 'mortgage_payable', 'liens_payable', 'other_debts', 'total_liabilities', 'net_worth'], 'number'],
            [['asset_id'], 'unique'],
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
            'cash' => 'Cash',
			'certificates_of_deposit' => 'Certificates of Deposit',
            'life_insurance' => 'Life Insurance',
            'securities' => 'Stocks & Bonds',
            'other_securities' => 'Other Securities',
            'accounts_receivable_good' => 'Accts Receivable Good',
            'assets_conv_to_cash' => 'Assets Conv To Cash',
			'other_investments' => 'Other Investments',
            'total_current_assets' => 'Total Current Assets',
            'real_estate' => 'Real Estate',
            'mortgages_owned' => 'Mortages Owned',
            'accounts_receivable_doubt' => 'Accts Receivable Doubt',
            'notes_relatives_friends' => 'Notes Relatives Friends',
            'other_securities_not_marketable' => 'Unmarketable Securities',
            'personal_property' => 'Personal Property',
            'other_assets' => 'Other Assets',
            'total_assets' => 'Total Assets',
            'notes_to_banks' => 'Notes To Banks',
            'notes_to_relatives' => 'Notes To Relatives',
            'notes_to_others' => 'Notes To Others',
            'accounts_payable' => 'Accounts Payable',
            'unpaid_income_tax' => 'Unpaid Income Tax',
            'other_unpaid_tax' => 'Other Unpaid Tax',
            'loans_on_life_insurance' => 'Loans On Life Insurance',
            'contract_accounts_payable' => 'Contract Accts Payable',
            'cash_rent_owed' => 'Cash Rent Owed',
            'other_liabilities' => 'Other Liabilities',
            'total_current_liabilities' => 'Total Current Liabilities',
            'mortgage_payable' => 'Mortgage Payable',
            'liens_payable' => 'Liens Payable',
            'other_debts' => 'Other Debts',
            'total_liabilities' => 'Total Liabilities',
            'net_worth' => 'Net Worth',
        ];
    }
	
	public function afterFind() {
        parent::afterFind();
        $this->total_current_assets = $this->cash + 
									  $this->certificates_of_deposit +
									  $this->life_insurance +
									  $this->securities +
									  $this->other_securities +
									  $this->accounts_receivable_good +
									  $this->assets_conv_to_cash +
									  $this->other_investments;
		$this->total_assets =		  $this->total_current_assets +
									  $this->real_estate +
									  $this->mortgages_owned +
									  $this->accounts_receivable_doubt +
									  $this->notes_relatives_friends +
									  $this->other_securities_not_marketable +
									  $this->personal_property +
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
    }
}
