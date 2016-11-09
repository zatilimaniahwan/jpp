<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NotesVisitingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Notes Visitings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notes-visiting-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Notes Visiting', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'visiting_id',
            'club_ref',
            'action_type',
            'created_by',
            // 'created_dt',
            // 'updated_by',
            // 'updated_dt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
