<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserData */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-data-form">

    <?php $form = ActiveForm::begin() ?>
	
	<hr>
	<div class="row">
		<div class="col-md-2">
			<?= $form->field($model, 'cash')->textInput(['style' => 'text-align: right'])->label('Cash On Hand') ?>
		</div>
		<div class="col-md-2">
			&nbsp;
		</div>
		<div class="col-md-2">
			<?= $form->field($model, 'notes_to_banks')->textInput(['style' => 'text-align: right'])->label('Notes Due To Banks') ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<?= $form->field($model, 'certificates_of_deposit')->textInput(['style' => 'text-align: right'])->label('Certificates of Deposit') ?>
		</div>	
		<div class="col-md-2">
			&nbsp;
		</div>
		<div class="col-md-2">
		<?= $form->field($model, 'notes_to_relatives')->textInput(['style' => 'text-align: right'])->label('Notes Due(Outgoing)') ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<?= $form->field($model, 'life_insurance')->textInput(['style' => 'text-align: right'])->label('Life Insurance') ?>
		</div>
		<div class="col-md-2">
			&nbsp;
		</div>
	<div class="col-md-2">
		<?= $form->field($model, 'notes_to_others')->textInput(['style' => 'text-align: right'])->label('Notes Due to Others') ?>
		</div>
		
	</div>
	<div class="row">
	<div class="col-md-2">
			<?= $form->field($model, 'securities')->textInput(['style' => 'text-align: right'])->label('Stocks & Bonds') ?>
		</div>
		<div class="col-md-2">
			&nbsp;
		</div>
		<div class="col-md-2">
		<?= $form->field($model, 'accounts_payable')->textInput(['style' => 'text-align: right'])->label('Accts & Bills Payable') ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<?= $form->field($model, 'other_securities')->textInput(['style' => 'text-align: right'])->label('Other Secutities') ?>
		</div>
		<div class="col-md-2">
			&nbsp;
		</div>
		<div class="col-md-2">
			<?= $form->field($model, 'unpaid_income_tax')->textInput(['style' => 'text-align: right'])->label('Unpaid Income Tax') ?>
			</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<?= $form->field($model, 'accounts_receivable_good')->textInput(['style' => 'text-align: right'])->label('Accts Receivable') ?>
		</div>
		<div class="col-md-2">
			&nbsp;
		</div>
		<div class="col-md-2">
			<?= $form->field($model, 'other_unpaid_tax')->textInput(['style' => 'text-align: right'])->label('Other Unpaid Taxes') ?>
		</div>
	</div>
	<div class="row">
	<div class="col-md-2">
			<?= $form->field($model, 'other_assets')->textInput(['style' => 'text-align: right'])->label('Other Assets') ?>
		</div>
		<div class="col-md-2">
			&nbsp;
		</div>
		<div class="col-md-2">
		<?= $form->field($model, 'loans_on_life_insurance')->textInput(['style' => 'text-align: right'])->label('Loans on Life Insurance') ?>
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-2">
				<?= $form->field($model, 'other_investments')->textInput(['style' => 'text-align: right'])->label('Other Investments') ?>
		</div>
		<div class="col-md-2">
			&nbsp;
		</div>
		<div class="col-md-2">
			<?= $form->field($model, 'contract_accounts_payable')->textInput(['style' => 'text-align: right'])->label('Contract Accts Payable') ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
				&nbsp;
		</div>
		<div class="col-md-2">
			&nbsp;
		</div>
		<div class="col-md-2">
		<?= $form->field($model, 'cash_rent_owed')->textInput(['style' => 'text-align: right'])->label('Rent/Mortgage Owed') ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
				&nbsp;
		</div>
		<div class="col-md-2">
			&nbsp;
		</div>
		<div class="col-md-2">
		<?= $form->field($model, 'other_liabilities')->textInput(['style' => 'text-align: right'])->label('Other Liabilities Due') ?>
		</div>
	</div>
	<div class="row">
	<div class="col-md-2">
				<?= $form->field($model, 'total_current_assets')->textInput(['style' => 'text-align: right','readonly'=>true])->label('Total Current Assets') ?>
			</div>
			<div class="col-md-2">
			&nbsp;
		</div>
			<div class="col-md-2">
			<?= $form->field($model, 'total_current_liabilities')->textInput(['readonly'=> true])->label('Total Current Liabilities') ?>
			</div>
			
	</div>
	<div class="row">
		<div class="col-md-2">
				<?= $form->field($model, 'real_estate')->textInput(['style' => 'text-align: right'])->label('Real Estate Owned') ?>
		</div>
		<div class="col-md-2">
			&nbsp;
		</div>
		<div class="col-md-2">
			<?= $form->field($model, 'mortgage_payable')->textInput(['style' => 'text-align: right'])->label('Mortgage Payable') ?>
			</div>
	</div>
	<div class="row">
		<div class="col-md-2">
				<?= $form->field($model, 'mortgages_owned')->textInput(['style' => 'text-align: right'])->label('Mortgages Owned') ?>
		</div>
		<div class="col-md-2">
			&nbsp;
		</div>
		<div class="col-md-2">
			<?= $form->field($model, 'liens_payable')->textInput(['style' => 'text-align: right'])->label('Liens Payable') ?>
			</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<?= $form->field($model, 'accounts_receivable_doubt')->textInput(['style' => 'text-align: right'])->label('Accts Receivable(Doubt)') ?>
		</div>
		<div class="col-md-2">
			&nbsp;
		</div>
		<div class="col-md-2">
			<?= $form->field($model, 'other_debts')->textInput(['style' => 'text-align: right'])->label('Other Debts') ?>
			</div>
	</div>
	<div class="row">
		<div class="col-md-2">
				<?= $form->field($model, 'notes_relatives_friends')->textInput(['style' => 'text-align: right'])->label('Notes Due(Outgoing)') ?>
		</div>
		<div class="col-md-2">
			&nbsp;
		</div>
		<div class="col-md-2">
				&nbsp;
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
				<?= $form->field($model, 'other_securities')->textInput(['style' => 'text-align: right'])->label('Other Securities') ?>
		</div>
		<div class="col-md-2">
			&nbsp;
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
				<?= $form->field($model, 'personal_property')->textInput(['style' => 'text-align: right'])->label('Personal Property') ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
				<?= $form->field($model, 'other_assets')->textInput(['style' => 'text-align: right'])->label('Other Assets') ?>
		</div>
		<div class="col-md-2">
			&nbsp;
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<?= $form->field($model, 'total_assets')->textInput(['style' => 'text-align: right','readonly'=>true])->label('Total Assets') ?>
		</div>
		<div class="col-md-2">
			&nbsp;
		</div>
		<div class="col-md-2">
			<?= $form->field($model, 'total_liabilities')->textInput(['style' => 'text-align: right','readonly'=>true])->label('Total Liabilities') ?>
			</div>
	</div>
	<div class="row">
			<div class="col-md-2">
			<?= $form->field($model, 'net_worth')->textInput(['style' => 'text-align: right','readonly'=>true])->label('Net Worth') ?>
			</div>
			
	</div>
	<div class="form-group">
		<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
