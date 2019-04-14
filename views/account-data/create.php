<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserData */

$this->title = 'Create Account Data';
$this->params['breadcrumbs'][] = ['label' => 'Account Data', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-data-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>