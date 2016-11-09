<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClubMeeting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="club-meeting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'meeting_id')->textInput() ?>

    <?= $form->field($model, 'club_ref')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
