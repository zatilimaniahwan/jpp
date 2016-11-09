<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Visiting */

$this->title = 'Create Visiting';
$this->params['breadcrumbs'][] = ['label' => 'Visitings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visiting-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
