<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ClubMeeting */

$this->title = 'Update Club Meeting: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Club Meetings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="club-meeting-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
