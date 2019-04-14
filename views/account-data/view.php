<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UserData */

$this->title = $model->asset_id;
$this->params['breadcrumbs'][] = ['label' => 'Account Data', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-data-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->asset_id], ['class' => 'btn btn-primary']) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            'entry_date',
            'cash',
            'life_insurance',
            'securities',
            'other_securities',
            'accounts_receivable_good',
            'assets_conv_to_cash',
            'total_current_assets',
            'real_estate',
            'mortages_owned',
            'accounts_receivable_doubt',
            'notes_relatives_friends',
            'personal_property',
            'other_assets',
			'total_assets',
            
            
            
     
            'notes_to_banks',
            'notes_to_relatives',
            'notes_to_others',
            'accounts_payable',
            'unpaid_income_tax',
            'other_unpaid_tax',
            'loans_on_life_insurance',
            'contract_accounts_payable',
            'cash_rent_owed',
            'other_liabilities',
			'total_current_liabilities',
            'mortgage_payable',
            'liens_payable',
            'other_debts',
			'total_liabilities',
            'net_worth',
            'total_net_worth',
        ],
    ]) ?>

</div>
