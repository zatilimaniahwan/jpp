<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\NotesVisiting */

$this->title = 'Create Notes Visiting';
$this->params['breadcrumbs'][] = ['label' => 'Notes Visitings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notes-visiting-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
