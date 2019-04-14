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
				<?= $form->field($model, 'first_name')->textInput(['maxlength' => true,'layout'=>'inline'])->label('First Name') ?>
			</div>
			<div class="col-sm-4">
				<?= $form->field($model, 'last_name')->textInput(['maxlength' => true,'layout'=>'inline'])->label('Last Name') ?>
			</div>
			<div class="col-sm-1">
				<?= $form->field($model, 'mi')->textInput(['maxlength' => true,'layout'=>'inline'])->label('MI') ?>
			</div>
			<div class="col-sm-1">
				<?= $form->field($model, 'suffix')->textInput(['maxlength' => true,'layout'=>'inline'])->label('Suffix') ?>
			</div>
			<div class="col-sm-4">
				<?= $form->field($model, 'address')->textInput(['maxlength' => true,'layout'=>'inline'])->label('Address') ?>
			</div>
			<div class="col-sm-4">
				<?= $form->field($model, 'city')->textInput(['maxlength' => true,'layout'=>'inline'])->label('City') ?>
			</div>
			<div class="col-sm-1">
				<?= $form->field($model, 'us_state')->textInput(['maxlength' => true,'layout'=>'inline'])->label('State') ?>
			</div>
			<div class="col-sm-2">
				<?= $form->field($model, 'zip')->textInput(['maxlength' => true,'layout'=>'inline'])->label('Zipcode') ?>
			</div>
			<div class="col-sm-2">
				<?= $form->field($model, 'phone')->textInput(['maxlength' => true,'layout'=>'inline'])->label('Phone') ?>
			</div>
			<div class="col-sm-2">
				<?= $form->field($model, 'business_phone')->textInput(['maxlength' => true,'layout'=>'inline'])->label('Business Phone') ?>
			</div>
			<div class="col-sm-2">
				<?= $form->field($model, 'ssn')->textInput(['maxlength' => true,'layout'=>'inline'])->label('SSN') ?>
			</div>
			<div class="col-sm-2">
				<?= $form->field($model, 'dob')->textInput(['maxlength' => true,'layout'=>'inline'])->label('Birth Date') ?>
			</div>
		</div>
	</div>
  
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
