<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VisitingInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Selenggara Laporan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-info">
    <div class="panel-body">
         <div class="visiting-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Laporan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'club_ref',
            'pdk1_name',
            'pdk2_name',
            'visit_dt',
             'type_visit',
            // 'reason_visit',
            // 'created_by',
            // 'created_dt',
            // 'updated_by',
            // 'updated_dt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
    </div>
</div>

