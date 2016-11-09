<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClubMeetingInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="club-meeting-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'club_ref')->textInput() ?>

    <?= $form->field($model, 'meeting_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notice_dt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'event_dt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_member')->textInput() ?>

    <?= $form->field($model, 'notice_days')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'corum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agenda')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_dt')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_dt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
