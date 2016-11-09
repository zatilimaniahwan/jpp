<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ClubMeetingInfo */

$this->title = 'Create Club Meeting Info';
$this->params['breadcrumbs'][] = ['label' => 'Club Meeting Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="club-meeting-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
