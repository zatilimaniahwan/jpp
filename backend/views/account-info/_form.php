<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AccountInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="account-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'club_ref')->textInput() ?>

    <?= $form->field($model, 'saving_type')->textInput() ?>

    <?= $form->field($model, 'bank_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_district')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_amount_dt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_dt')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_dt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
