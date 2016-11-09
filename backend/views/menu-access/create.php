<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MenuAccess */

$this->title = 'Create Menu Access';
$this->params['breadcrumbs'][] = ['label' => 'Menu Accesses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-access-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
