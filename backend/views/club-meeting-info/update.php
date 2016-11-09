<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ClubMeetingInfo */

$this->title = 'Update Club Meeting Info: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Club Meeting Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="club-meeting-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
