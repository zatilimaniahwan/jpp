<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ClubMeeting */

$this->title = 'Create Club Meeting';
$this->params['breadcrumbs'][] = ['label' => 'Club Meetings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="club-meeting-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
