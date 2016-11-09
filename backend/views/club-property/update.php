<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ClubProperty */

$this->title = 'Update Club Property: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Club Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="club-property-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
