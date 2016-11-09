<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VisitingInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="visiting-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'club_ref') ?>

    <?= $form->field($model, 'pdk1_name') ?>

    <?= $form->field($model, 'pdk2_name') ?>

    <?= $form->field($model, 'visit_dt') ?>

    <?php // echo $form->field($model, 'type_visit') ?>

    <?php // echo $form->field($model, 'reason_visit') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'created_dt') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'updated_dt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
