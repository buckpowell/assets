<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserData */

$this->title = 'Update Account Data: ' . $model->asset_id;
$this->params['breadcrumbs'][] = ['label' => 'Account Data', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->asset_id, 'url' => ['view', 'id' => $model->asset_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-data-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
