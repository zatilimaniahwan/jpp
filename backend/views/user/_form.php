<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info">
    <div class="panel-body">
<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'last_login')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'last_login_attempts')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'login_attempts')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'status')->textInput() ?>

    <?php // $form->field($model, 'is_admin')->textInput() ?>

    <?php // $form->field($model, 'created_at')->textInput() ?>

    <?php // $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Tambah') : Yii::t('app', 'Kemaskini'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div></div></div>
