<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RefCat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ref-cat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descr')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
