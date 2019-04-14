<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model app\models\Account */
$this->title = 'Create Account';
$this->params['breadcrumbs'][] = ['label' => 'Account', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>