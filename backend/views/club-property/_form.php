<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClubProperty */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="club-property-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'club_ref')->textInput() ?>

    <?= $form->field($model, 'property_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'holder_id')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_dt')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_dt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
