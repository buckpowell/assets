<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Account */
/* @var $form yii\widgets\ActiveForm */
?>



<div class="account-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<div class="row">		
			<div class="col-md-4">
				<?= $form->field($model, 'first_name')->textInput() ?>
			</div>
			<div class="col-sm-4">
				<?= $form->field($model, 'last_name')->textInput() ?>
			</div>
			<div class="col-sm-1">
				<?= $form->field($model, 'mi')->textInput() ?>
			</div>
			<div class="col-sm-1">
				<?= $form->field($model, 'suffix')->textInput() ?>
			</div>
			<div class="col-sm-4">
				<?= $form->field($model, 'address')->textInput() ?>
			</div>
			<div class="col-sm-4">
				<?= $form->field($model, 'city')->textInput() ?>
			</div>
			<div class="col-sm-1">
				<?= $form->field($model, 'us_state')->textInput() ?>
			</div>
			<div class="col-sm-2">
				<?= $form->field($model, 'zip')->textInput() ?>
			</div>
			<div class="col-sm-2">
				<?= $form->field($model, 'phone')->textInput() ?>
			</div>
			<div class="col-sm-2">
				<?= $form->field($model, 'business_phone')->textInput() ?>
			</div>
			<div class="col-sm-2">
				<?= $form->field($model, 'ssn')->textInput() ?>
			</div>
			<div class="col-sm-2">
				<?= $form->field($model, 'dob')->textInput() ?>
			</div>
		</div>
	</div>
  
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
