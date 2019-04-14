<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserData */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-data-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cash')->textInput() ?>

    <?= $form->field($model, 'life_insurance')->textInput() ?>

    <?= $form->field($model, 'securities')->textInput() ?>

    <?= $form->field($model, 'other_securities')->textInput() ?>

    <?= $form->field($model, 'accounts_receivable_good')->textInput() ?>

    <?= $form->field($model, 'assets_conv_to_cash')->textInput() ?>

    <?= $form->field($model, 'total_current_assets')->textInput() ?>

    <?= $form->field($model, 'real_estate')->textInput() ?>

    <?= $form->field($model, 'mortages_owned')->textInput() ?>

    <?= $form->field($model, 'accounts_receivable_doubt')->textInput() ?>

    <?= $form->field($model, 'notes_relatives_friends')->textInput() ?>

    <?= $form->field($model, 'other_securities_not_marketable')->textInput() ?>

    <?= $form->field($model, 'personal_property')->textInput() ?>

    <?= $form->field($model, 'other_assets')->textInput() ?>

    <?= $form->field($model, 'total_assets')->textInput() ?>

    <?= $form->field($model, 'notes_to_banks')->textInput() ?>

    <?= $form->field($model, 'notes_to_relatives')->textInput() ?>

    <?= $form->field($model, 'notes_to_others')->textInput() ?>

    <?= $form->field($model, 'accounts_payable')->textInput() ?>

    <?= $form->field($model, 'unpaid_income_tax')->textInput() ?>

    <?= $form->field($model, 'other_unpaid_tax')->textInput() ?>

    <?= $form->field($model, 'loans_on_life_insurance')->textInput() ?>

    <?= $form->field($model, 'contract_accounts_payable')->textInput() ?>

    <?= $form->field($model, 'cash_rent_owed')->textInput() ?>

    <?= $form->field($model, 'other_liabilities')->textInput() ?>

    <?= $form->field($model, 'total_current_liabilities')->textInput() ?>

    <?= $form->field($model, 'mortgage_payable')->textInput() ?>

    <?= $form->field($model, 'liens_payable')->textInput() ?>

    <?= $form->field($model, 'other_debts')->textInput() ?>

    <?= $form->field($model, 'total_liabilities')->textInput() ?>

    <?= $form->field($model, 'net_worth')->textInput() ?>

    <?= $form->field($model, 'total_net_worth')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
