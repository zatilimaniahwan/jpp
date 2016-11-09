<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CohClubInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Coh Club Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coh-club-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Coh Club Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'club_ref',
            'amount',
            'created_by',
            'created_dt',
            // 'updated_by',
            // 'updated_dt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
