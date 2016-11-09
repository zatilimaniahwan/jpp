<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ClubPropertyHolder */

$this->title = 'Create Club Property Holder';
$this->params['breadcrumbs'][] = ['label' => 'Club Property Holders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="club-property-holder-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
