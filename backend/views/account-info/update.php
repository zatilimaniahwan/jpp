<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AccountInfo */

$this->title = 'Update Account Info: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Account Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="account-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
