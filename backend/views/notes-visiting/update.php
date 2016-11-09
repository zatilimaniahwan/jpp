<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NotesVisiting */

$this->title = 'Update Notes Visiting: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Notes Visitings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="notes-visiting-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
