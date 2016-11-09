<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RefList */

$this->title = 'Update Ref List: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ref Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ref-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
