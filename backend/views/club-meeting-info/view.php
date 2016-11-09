<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ClubMeetingInfo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Club Meeting Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="club-meeting-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'club_ref',
            'meeting_type',
            'notice_dt',
            'event_dt',
            'total_member',
            'notice_days',
            'corum',
            'agenda',
            'created_by',
            'created_dt',
            'updated_by',
            'updated_dt',
        ],
    ]) ?>

</div>
