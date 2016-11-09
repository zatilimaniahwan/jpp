<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\VisitingInfo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Selenggara Laporan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-info">
    <div class="panel-body">
<div class="visiting-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Kemaskini', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Anda pasti ingin memadam laporan ini?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'club_ref',
            'pdk1_name',
            'pdk2_name',
            'visit_dt',
            'type_visit',
            'reason_visit',
            'created_by',
            'created_dt',
            'updated_by',
            'updated_dt',
        ],
    ]) ?>

</div></div></div>
