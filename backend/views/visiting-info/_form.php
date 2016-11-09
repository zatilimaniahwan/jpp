<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VisitingInfo */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel panel-info">
    <div class="panel-body">
        <div class="visiting-info-form">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'club_ref')->textInput() ?>

            <?= $form->field($model, 'pdk1_name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'pdk2_name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'visit_dt')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'type_visit')->textInput() ?>

            <?= $form->field($model, 'reason_visit')->textInput() ?>

            <?php // $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

            <?php //$form->field($model, 'created_dt')->textInput() ?>

            <?php // $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

            <?php // $form->field($model, 'updated_dt')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Tambah' : 'Kemaskini', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>

    </div>
</div>