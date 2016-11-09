<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AccountInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Account Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Account Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'club_ref',
            'saving_type',
            'bank_name',
            'bank_district',
            // 'bank_state',
            // 'last_amount',
            // 'last_amount_dt',
            // 'created_by',
            // 'created_dt',
            // 'updated_by',
            // 'updated_dt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
