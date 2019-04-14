<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserData */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-data-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<div class="row">		
			<div class="col-md-3">
			<h4>ASSETS</h4>
			<table>
			<tr>
			<td>
				<?= $form->field($model, 'cash')->textInput() ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'life_insurance')->textInput(['style' => 'align: right']) ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'securities')->textInput(['style' => 'align: right']) ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'other_securities')->textInput(['style' => 'align: right']) ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'accounts_receivable_good')->textInput(['style' => 'align: right']) ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'assets_conv_to_cash')->textInput(['style' => 'align: right']) ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'total_current_assets')->textInput(['readonly'=> true]) ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'real_estate')->textInput(['style' => 'align: right']) ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'mortages_owned')->textInput(['style' => 'align: right']) ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'accounts_receivable_doubt')->textInput(['style' => 'align: right']) ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'notes_relatives_friends')->textInput(['style' => 'align: right']) ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'accounts_receivable_good')->textInput(['style' => 'align: right']) ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'other_securities_not_marketable')->textInput(['style' => 'align: right']) ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'personal_property')->textInput(['style' => 'align: right']) ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'other_assets')->textInput(['style' => 'align: right']) ?>
				</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'total_assets')->textInput(['readonly'=> true]) ?>
			</td>
			</tr>
			<tr>
			<td>
			</div>
			</td>
			</tr>
			</table>
			</div>
			<div class="col-md-3">
			<h4>LIABILITIES</h4>
			<table>
			<tr>
			<td>
				<?= $form->field($model, 'notes_to_banks')->textInput() ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'notes_to_relatives')->textInput() ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'notes_to_others')->textInput() ?>
			</td>
			</tr>
			<tr>
			<td>	
				<?= $form->field($model, 'accounts_payable')->textInput() ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'unpaid_income_tax')->textInput() ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'other_unpaid_tax')->textInput() ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'loans_on_life_insurance')->textInput() ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'contract_accounts_payable')->textInput() ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'cash_rent_owed')->textInput() ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'other_liabilities')->textInput() ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'total_current_liabilities')->textInput(['readonly'=> true]) ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'mortgage_payable')->textInput() ?>
			</td>
			</tr>
			<tr>
			<td>	
				<?= $form->field($model, 'liens_payable')->textInput() ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'other_debts')->textInput() ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'total_liabilities')->textInput(['readonly'=> true]) ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'net_worth')->textInput(['readonly'=> true]) ?>
			</td>
			</tr>
			<tr>
			<td>
				<?= $form->field($model, 'total_net_worth')->textInput(['readonly'=> true]) ?>
			</td>
			</tr>
			</table>
			</div>
			
	</div>

    








    

    
    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
