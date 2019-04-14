<?php
 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
 
$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Please fill out the following fields to signup:</p>
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
			<?= $form->field($model, 'first_name') ?>
			</div>
			<div class="col-lg-5">
			<?= $form->field($model, 'password')->passwordInput() ?>
			<?= $form->field($model, 'mi') ?>
			
			</div>
		<div class="col-lg-5">
			<?= $form->field($model, 'last_name') ?>
		
			
		</div>
		<div class="col-lg-5">
			<?= $form->field($model, 'suffix') ?>
		</div>
	</div>
                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
 
        </div>
</div>