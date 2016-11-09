<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Applicant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applicant-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ref_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'club_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add_reg_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add_reg_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'postcode_reg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'district_reg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state_reg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add_letter_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add_letter_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'postcode_letter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'district_letter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state_letter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'leader_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'secretary_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'treasury_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'club_type')->textInput() ?>

    <?= $form->field($model, 'docs_completed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_member')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'entrance_fee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'member_fee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'founded_dt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_dt')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_dt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
