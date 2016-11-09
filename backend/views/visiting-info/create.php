<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\VisitingInfo */

$this->title = 'Tambah Laporan';
$this->params['breadcrumbs'][] = ['label' => 'Selenggara Laporan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visiting-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
