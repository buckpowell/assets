<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Account Data';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-data-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'entry_date',
            'cash',
            'life_insurance',
            'securities',
            //'other_securities',
            //'accounts_receivable_good',
            //'assets_conv_to_cash',
            //'total_current_assets',
            //'real_estate',
            //'mortages_owned',
            //'accounts_receivable_doubt',
            //'notes_relatives_friends',
            //'personal_property',
            //'other_assets',
            //'salaries_bonus_commision',
            //'dividends_interest',
            //'rental_income_net',
            //'other_income',
            //'other_persons_salary',
            //'other_income_other_person',
            //'assets_pledged',
            //'defendent_in_suit',
            //'bankruptcy_declared',
            //'notes_to_banks',
            //'notes_to_relatives',
            //'notes_to_others',
            //'accounts_payable',
            //'unpaid_income_tax',
            //'other_unpaid_tax',
            //'loans_on_life_insurance',
            //'contract_accounts_payable',
            //'cash_rent_owed',
            //'other_liabilties',
            //'mortgage_payable',
            //'liens_payable',
            //'other_debts',
            //'net_worth',
            //'total_net_worth',
            //'income_taxes',
            //'other_taxes',
            //'insurance_premiums',
            //'mortgage_premiums',
            //'rent_payable',
            //'other_expenses',
            //'endorser_liability',
            //'lease_contract_liability',
            //'legal_claim_liablility',
            //'income_tax_liability',
            //'other_liability',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
