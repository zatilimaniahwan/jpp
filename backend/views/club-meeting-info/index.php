<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClubMeetingInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Club Meeting Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="club-meeting-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Club Meeting Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'club_ref',
            'meeting_type',
            'notice_dt',
            'event_dt',
            // 'total_member',
            // 'notice_days',
            // 'corum',
            // 'agenda',
            // 'created_by',
            // 'created_dt',
            // 'updated_by',
            // 'updated_dt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
