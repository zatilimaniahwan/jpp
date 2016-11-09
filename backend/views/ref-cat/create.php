<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RefCat */

$this->title = 'Create Ref Cat';
$this->params['breadcrumbs'][] = ['label' => 'Ref Cats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ref-cat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
