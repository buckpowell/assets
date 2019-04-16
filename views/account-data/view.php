<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ViewPrint */

$this->title = 'Financial Statement';
$this->params['breadcrumbs'][] = ['label' => 'Financial Statement', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="view-print-view">
    <h1><?= Html::encode($this->title) ?></h1>
<table width = '90%' >
<tr>
<th></th><th></th><th></th><th>DATE:<?php echo date("M d Y", strtotime($model->entry_date));?></th>
</tr>
<tr>
<td>

</td>
</tr>

<tr>
<td>
<label for="name">Name:</label><?=$account->first_name . ' ' . $account->mi . ' ' . $account->last_name;?>
</td>
<td>
<label for="name">SSN:</label><?=$account->ssn;?>
</td>
</tr>
<tr>
<td>
<label for="address">Address:</label><?=$account->address;?>
</td>
<td>
<label for="dob">Birthdate:</label><?=$account->dob;?>
</td>
</tr>
<tr>
<td>
<label for="csz">City, State, Zip:</label><?=$account->city . ' ,' . $account->us_state . ' ' . $account->zip;?>
</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>
<label for="phone">Home Telephone:</label><?=$account->phone;?>
</td>
<td>&nbsp;</td>
</tr>
</table>
<table width = '90%' border='1'>
<tr>
<th colspan="2" class="text-center">ASSETS</th><th colspan="2" class="text-center">LIABILITIES</th>
</tr>
<tr>
<td>
<label for="cash">Cash:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->cash;?>
</td>
<td>
<label for="bank_notes">Notes Due to Banks:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->notes_to_banks;?>
</td>
</tr>

<tr>
<td>
<label for="life_insurance">Life Insurance:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->life_insurance;?>
</td>
<td>
<label for="notes_to_relatives">Notes To Realtives & Friends:</label><?php echo '$' . $model->notes_to_relatives;?>
</td>
<td class="text-right">
<?php echo '$' . $model->notes_to_relatives;?>
</td>
</tr>

<tr>
<td>
<label for="securities">U.S. Gov. Securities:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->securities;?>
</td>
<td>
<label for="notes_due_others">Notes Due Others:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->notes_to_others;?>
</td>
</tr>



<tr>
<td>
<label for="accts_receiveable_good">Other Marketable Securities:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->other_securities;?>
</td>
<td>
<label for="accts_payable">Accounts & Bills Payable:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->accounts_payable;?>
</td>
</tr>

<tr>
<td>
<label for="assets_conv_to_cash">Notes & Accts Receivable(Good):</label>
</td>
<td class="text-right">
<?php echo '$' . $model->accounts_receivable_good;?>
</td>
<td>
<label for="accts_payable">Unpaid Income Tax Due(Federal/State):</label>
</td>
<td class="text-right">
<?php echo '$' . $model->unpaid_income_tax;?>
</td>
</tr>

<tr>
<td>
<label for="assets_conv_to_cash">Other Assets Conv to Cash:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->assets_conv_to_cash;?>
</td>
<td>
<label for="accts_payable">Other Unpaid Taxes & Interest:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->other_unpaid_tax;?>
</td>
</tr>

<tr>
<td>
&nbsp;
</td>
<td class="text-right">
&nbsp;
</td>
<td>
<label for="accts_payable">Loans on Life Insurance Policies:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->loans_on_life_insurance;?>
</td>
</tr>

<tr>
<td>
&nbsp;
</td>
<td class="text-right">
&nbsp;
</td>
<td>
<label for="accts_payable">Contract Accts Payable:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->contract_accounts_payable;?>
</td>
</tr>

<tr>
<td>
&nbsp;
</td>
<td class="text-right">
&nbsp;
</td>
<td>
<label for="accts_payable">Cash Rent Owed:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->cash_rent_owed;?>
</td>
</tr>

<tr>
<td>
<label for="accts_payable">TOTAL CURRENT ASSETS:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->total_current_assets;?>
</td>
<td>
<label for="accts_payable">Other Liabilities Due:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->other_liabilities;?>
</td>
</tr> 

<tr>
<td>
<label for="accts_payable">Real Estate Owned:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->real_estate;?>
</td>
<td>
&nbsp;
</td>
<td class="text-right">
&nbsp;
</td>
</tr>

<tr>
<td>
<label for="accts_payable">Mortgages & Contracts Owned:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->mortages_owned;?>
</td>
<td>
&nbsp;
</td>
<td class="text-right">
&nbsp;
</td>
</tr>

<tr>
<td>
<label for="accts_payable">Notes & Accts Recieveable(Doubt):</label>
</td>
<td class="text-right">
<?php echo '$' . $model->accounts_receivable_doubt;?>
</td>
<td>
<label for="accts_payable">TOTAL CURRENT LIABILITIES:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->total_current_liabilities;?>
</td>
</tr>

<tr>
<td>
<label for="accts_payable">Notes Due From Relatives & Friends:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->notes_relatives_friends;?>
</td>
<td>
<label for="accts_payable">Real Estate Mortgage Payable:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->mortgage_payable;?>
</td>
</tr>

<tr>
<td>
<label for="accts_payable">Other Securitities (Not Marketable):</label>
</td>
<td class="text-right">
<?php echo '$' . $model->other_securities_not_marketable;?>
</td>
<td>
<label for="accts_payable">Loans & Assessments Payable:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->liens_payable;?>
</td>
</tr>

<tr>
<td>
<label for="accts_payable">Personal Propery:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->personal_property;?>
</td>
<td>
<label for="accts_payable">Other Debts:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->other_debts;?>
</td>
</tr>

<tr>
<td>
<label for="accts_payable">Other Assets:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->other_assets;?>
</td>
<td>
&nbsp;
</td>
<td class="text-right">
&nbsp;
</td>
</tr>

<tr>
<td>
&nbsp;
</td>
<td class="text-right">
&nbsp;
</td>
<td>
<label for="accts_payable">TOTAL LIABILITIES:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->total_liabilities;?>
</td>
</tr>

<tr>
<td>
&nbsp;
</td>
<td class="text-right">
&nbsp;
</td>
<td>
<label for="accts_payable">NET WORTH:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->net_worth;?>
</td>
</tr>

<tr>
<td>
<label for="accts_payable">TOTAL ASSETS:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->total_assets;?>
</td>
<td>
<label for="accts_payable">TOTAL LIABILITIES & NET WORTH:</label>
</td>
<td class="text-right">
<?php echo '$' . $model->total_net_worth;?>
</td>
</tr>


</table>

</div>
<p>
        <?= Html::a('Update', ['update', 'id' => $model->asset_id], ['class' => 'btn btn-primary']) ?>
        
    </p>