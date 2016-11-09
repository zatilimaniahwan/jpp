<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClubMeetingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Club Meetings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="club-meeting-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Club Meeting', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'meeting_id',
            'club_ref',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
