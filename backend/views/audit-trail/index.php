<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AuditTrailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Audit Trails';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-trail-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Audit Trail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'menu_id',
            'action_dt',
            'action_type',
            // 'data_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
