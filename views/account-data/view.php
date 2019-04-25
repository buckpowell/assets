<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\View */

$this->title = 'Financial Statement';
$this->params['breadcrumbs'][] = ['label' => 'Financial Statement', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="view-view">
 
<html>
<head>
	<style>
	    body {
			margin:0;
		}
		h5 {
			font-weight:bold;
		}
		td {
			font-size:12px;
		}
		table_border {
			border:1
		}
		.td_label {
			align:left;
		}
		.td_data {
			align:right;
		}
		th {
			font-size:12px; font-weight:bold;
		}
	</style>
</head>
<body>
	<h5 align="center">Personal Financial Statement</h5>	
	<h6 align="right"><b>Date:</b><?= date("M d, Y", strtotime($model->entry_date))?></h6>
	<h5 align="center"><b>Personal Information</b></h5>
	<table width="100%">
		<tr>
			<td align="left"><label for="name">Name:</label></td>
			<td><?= $account->first_name . ' ' . $account->mi . ' ' .$account->last_name ?></td>
			<td align="left"><label for="ssn">SSN:</label></td>
			<td><?= $account->ssn ?></td>
		</tr>
		<tr>
			<td align="left"><label for="name">address:</label></td>
			<td><?=$account->address ?></td>
			<td align="left"><label for="dob">Birthdate:</label></td>
			<td><?=date("M d, Y", strtotime($account->dob))?></td>
		</tr>
		<tr>
			<td align="left"><label for="csz">City, State Zip:</label></td>
			<td><?=  $account->city . ', ' . $account->us_state . ' ' .$account->zip ?></td>
			<td align="left"><label for="phone">Phone:</label></td>
			<td><?= $account->phone ?></td>
		</tr>
	</table>
	<hr>
	<table width="100%">
		<tr>
		<th colspan="2">ASSETS</th><th colspan="2">LIABILITIES</th>
		</tr>
		<tr>
		<td>&nbsp;</td>
		</tr>
		<tr>
			<td class="td_label"><label for="cash">Cash on Hand & in Banks:</label></td>
			<td class="td_data"><?= '$' . number_format($model->cash,0)?></td>
			<td class="td_label"><label for="notes">Notes Due to Banks:</label></td>
			<td class="td_data"><?= '$' .number_format($model->notes_to_banks,0)?></td>
		</tr>
		<tr>
			<td class="td_label"><label for="cash">Certificates of Deposit:</label></td>
			<td class="td_data"><?= '$' . number_format($model->certificates_of_deposit,0)?></td>
			<td class="td_label">Notes Due to Relatives & Friends:</td>
			<td class="td_data"><?= '$' .number_format($model->notes_to_relatives,0)?></td>
		</tr>
		<tr>
		<td class="td_label"><label for="assets_conv_to_cash">Cash Value of Life Insurance:</label></td>
		<td class="td_data"><?= '$' . number_format($model->life_insurance,0) ?></td>
		<td class="td_label"> Notes Due Others:</td>
		<td class="td_data"><?= '$' .number_format($model->notes_to_others,0)?></td>
		</tr>
		<tr>
		<td class="td_label"><label for="bonds">Stocks & Bonds:</label></td>
		<td class="td_data">'<?= '$' . number_format($model->securities,0)?></td>
		<td class="td_label">Accounts & Bills Payable:</td>
		<td class="td_data"> <?=  '$' .number_format($model->accounts_payable,0)?></td>
		</tr>
		<tr>
		<td class="td_label"><label for="other_securitites">Other Securities(Marketble):</label></td>
		<td class="td_data"><?=  '$' . number_format($model->other_securities,0)?></td>
		<td class="td_label">Unpaid Income Tax(Federal/State):</td>
		<td class="td_data"><?= '$' .number_format($model->unpaid_income_tax,0)?></td>
		</tr>
		<tr>
		<td class="td_label"><label for="accounts_receiveable_good">Notes & Accts Receivable(Good):</label></td>
		<td class="td_data"><?= '$' . number_format($model->accounts_receivable_good,0)?> </td>
		<td class="td_label">Other Unpaid Taxes & Interest:</td>
		<td class="td_data"><?= '$' .number_format($model->other_unpaid_tax,0)?></td>
		</tr>
		<tr>
		<td class="td_label"><label for="assets_conv_to_cash">Other Assets Conv to Cash):</label></td>
		<td class="td_data"><?= '$' . number_format($model->assets_conv_to_cash,0) ?></td>
		<td class="td_label">Loans on Life Insurance Policies:</td>
		<td class="td_data"><?= '$' .number_format($model->loans_on_life_insurance,0)?></td>
		</tr>
		<tr>
		<td class="td_label"><label for="other_investments">Other Investments:</label></td>
		<td class="td_data"><?= '$' . number_format($model->other_investments,0)?></td>
		<td  class="td_label">Contract Accts Payable:</td>
		<td class="td_data"><?= '$' .number_format($model->contract_accounts_payable,0)?></td>
		</tr>
		<tr>
		<td>&nbsp;</td><td class="td_data"></td>
		<td class="td_label"">Mortgage/Rent Due:</td>
		<td class="td_data"><?= '$' .number_format($model->cash_rent_owed,0)?></td>
		</tr>
		<tr>
		<td><label for="blank">&nbsp;</label></td>
		<td>&nbsp;</td>
		<td class="label"><label for="blank">Other Liabilities Due</label></td>
		<td class="td_data"><?= '$' .number_format($model->other_liabilities,0)?></td>
		</tr>
		<tr>
		<td class="td_label"><label for="total_current_assets">TOTAL CURRENT ASSETS</label></td>
		<td class="td_data"><?= '$' . number_format($model->total_current_assets,0)?></td>
		<td class="td_label">TOTAL CURRENT LIABLIITIES</td>
		<td class="td_data"><?= '$' .number_format($model->total_current_liabilities,0)?></td>
		</tr>
		<tr>
		<td><label for="real_estate_owned">Real Estate Owned:</label></td>
		<td class="td_data"><?=  '$' . number_format($model->real_estate,0)?></td>
		<td class="td_label">Real Estate Mortgage Payable:</td>
		<td class="td_data"><?= '$' .number_format($model->mortgage_payable,0)?></td>
		</tr>
		<tr>
		<td><label for="mortgages_and contracts_owned">Mortgages & Contracts Owned:</label></td>
		<td class="td_data"><?= '$' . number_format($model->mortgages_owned,0)?></td>
		<td class="td_label">Liens & Assessments Payable:</td>
		<td class="td_data"><?= '$' .number_format($model->liens_payable,0)?></td>
		</tr>
		<tr>
		<td><label for="accts_receiveabla">Other Securities(Not Marketable):</label></td>
		<td class="td_data"><?= '$' . number_format($model->accounts_receivable_doubt,0)?></td>
		<td class="td_label">Other Debts:</td>
		<td class="td_data"><?= '$' .number_format($model->other_debts,0)?></td>
		</tr>
		<tr>
		<td class="td_label"><label for="personal_property">Personal Porperty:</label></td>
		<td class="td_data"><?= '$' . number_format($model->personal_property,0) ?></td>
		<td>&nbsp;</td>
		<td class="td_data">&nbsp;</td>
		</tr>
		<tr>
		<td class="td_label"><label for="other_assets">Other Assets:</label></td>
		<td class="td_data"><?= '$' . number_format($model->other_assets)?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td class="td_label"><label for="total_assets">TOTAL ASSETS</label></td>
		<td class="td_data"><?= '$' . number_format($model->total_assets)?></td>
		<td class="td_label">TOTAL LIABILITIES</td>
		<td class="td_data"><?= '$' .number_format($model->total_liabilities)?></td>
		</tr>
		<tr>
		<td colspan="4"><hr></td>
		</tr>
		<tr>
		<td><label for="total_assets"><b>NET WORTH(Total Assets - Total Liabilities)</b></label></td>
		<td><?= '$' . number_format($model->net_worth,0)?></td>
		</tr>
	</table>
</body>
</html>
</div>
<p>
	<?= Html::a('Update', ['update', 'id' => $model->asset_id], ['class' => 'btn btn-primary']) ?>
	<?= Html::a('Print', ['print', 'id' => $model->asset_id], ['class' => 'btn btn-primary']) ?>
	
</p>