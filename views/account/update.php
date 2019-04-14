    
<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model app\models\Account */
$this->title = 'Update Account: ' . $model->first_name . ' '  . $model->mi . ' ' . $model->last_name;
$this->params['breadcrumbs'][] = ['label' => 'Account', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->first_name . ' '  . $model->mi . ' ' . $model->last_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="account-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>