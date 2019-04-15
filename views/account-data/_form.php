<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserData */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-data-form">

    <?php $form = ActiveForm::begin(); ?>
	<h3>Assets</h3>
	<hr>
	<div class="row">
		<div class="col-md-2">
			<?= $form->field($model, 'cash')->textInput() ?>
		</div>
		<div class="col-md-2">
			<?= $form->field($model, 'life_insurance')->textInput() ?>
		</div>
		<div class="col-md-2">
			<?= $form->field($model, 'securities')->textInput() ?>
		</div>
		<div class="col-md-2">
			<?= $form->field($model, 'other_securities')->textInput() ?>
		</div>
		<div class="col-md-2">
			<?= $form->field($model, 'accounts_receivable_good')->textInput() ?>
		</div>
		<div class="col-md-2">
			<?= $form->field($model, 'assets_conv_to_cash')->textInput() ?>
		</div>
	</div>
		<div class="row">
			<div class="col-md-2">
				<?= $form->field($model, 'total_current_assets')->textInput(['readonly'=> true]) ?>
			</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<?= $form->field($model, 'real_estate')->textInput() ?>
		</div>
		<div class="col-md-2">
			<?= $form->field($model, 'mortages_owned')->textInput() ?>
		</div>
		<div class="col-md-2">
			<?= $form->field($model, 'accounts_receivable_doubt')->textInput() ?>
		</div>
		<div class="col-md-2">
			<?= $form->field($model, 'notes_relatives_friends')->textInput() ?>
		</div>
		<div class="col-md-2">
			<?= $form->field($model, 'other_securities_not_marketable')->textInput() ?>
		</div>
		<div class="col-md-2">
			<?= $form->field($model, 'personal_property')->textInput() ?>
		</div>
		<div class="col-md-2">
			<?= $form->field($model, 'other_assets')->textInput() ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<?= $form->field($model, 'total_assets')->textInput(['readonly'=> true]) ?>
		</div>
	</div>
	<h3>Liabilities</h3>
	<hr>
	<div class="row">
			<div class="col-md-2">
			<?= $form->field($model, 'notes_to_banks')->textInput() ?>
			</div>
			<div class="col-md-2">
			<?= $form->field($model, 'notes_to_relatives')->textInput() ?>
			</div>
			<div class="col-md-2">
			<?= $form->field($model, 'notes_to_others')->textInput() ?>
			</div>
			<div class="col-md-2">
			<?= $form->field($model, 'accounts_payable')->textInput() ?>
			</div>
			<div class="col-md-2">
			<?= $form->field($model, 'unpaid_income_tax')->textInput() ?>
			</div>
			<div class="col-md-2">
			<?= $form->field($model, 'other_unpaid_tax')->textInput() ?>
			</div>
			<div class="col-md-2">
			<?= $form->field($model, 'loans_on_life_insurance')->textInput() ?>
			</div>
			<div class="col-md-2">
			<?= $form->field($model, 'contract_accounts_payable')->textInput() ?>
			</div>
			<div class="col-md-2">
			<?= $form->field($model, 'cash_rent_owed')->textInput() ?>
			</div>
			<div class="col-md-2">
			<?= $form->field($model, 'other_liabilities')->textInput() ?>
			</div>
	</div>
	<div class="row">
			<div class="col-md-2">
			<?= $form->field($model, 'total_current_liabilities')->textInput(['readonly'=> true]) ?>
			</div>
	</div>
	<div class="row">
			<div class="col-md-2">
			<?= $form->field($model, 'mortgage_payable')->textInput() ?>
			</div>
			<div class="col-md-2">
			<?= $form->field($model, 'liens_payable')->textInput() ?>
			</div>
			<div class="col-md-2">
			<?= $form->field($model, 'other_debts')->textInput() ?>
			</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<?= $form->field($model, 'total_liabilities')->textInput(['readonly'=> true]) ?>
			</div>
	</div>
	<div class="row">
			<div class="col-md-2">
			<?= $form->field($model, 'net_worth')->textInput(['readonly'=> true]) ?>
			</div>
	</div>
	<div class="row">
			<div class="col-md-2">
			<?= $form->field($model, 'total_net_worth')->textInput(['readonly'=> true]) ?>
			</div>
	</div>
			<div class="form-group">
				<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
			</div>

			<?php ActiveForm::end(); ?>

</div>
