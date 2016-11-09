<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\VisitingInfo */

$this->title = 'Kemaskini Laporan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Selenggara Laporan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Kemaskini';
?>
<div class="visiting-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
