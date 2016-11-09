<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ClubPropertyHolder */

$this->title = 'Update Club Property Holder: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Club Property Holders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="club-property-holder-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
