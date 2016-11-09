<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CohClubInfo */

$this->title = 'Update Coh Club Info: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Coh Club Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="coh-club-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
