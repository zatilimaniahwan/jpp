<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AuditTrail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="audit-trail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'menu_id')->textInput() ?>

    <?= $form->field($model, 'action_dt')->textInput() ?>

    <?= $form->field($model, 'action_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
