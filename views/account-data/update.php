<?php

use yii\helpers\Html;
use app\models\User;

/* @var $this yii\web\View */
/* @var $model app\models\UserData */

$id = $_SESSION['__id'];

$title = User::getFullName($id);
$this->title = 'Update Account Data: ' . $title;
$this->params['breadcrumbs'][] = ['label' => 'Account Data', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $title, 'url' => ['view', 'id' => $model->asset_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-data-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
