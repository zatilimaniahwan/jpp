<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ClubProperty */

$this->title = 'Create Club Property';
$this->params['breadcrumbs'][] = ['label' => 'Club Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="club-property-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
