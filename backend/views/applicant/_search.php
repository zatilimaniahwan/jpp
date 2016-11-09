<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ApplicantSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applicant-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ref_no') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'club_name') ?>

    <?php // echo $form->field($model, 'add_reg_1') ?>

    <?php // echo $form->field($model, 'add_reg_2') ?>

    <?php // echo $form->field($model, 'postcode_reg') ?>

    <?php // echo $form->field($model, 'district_reg') ?>

    <?php // echo $form->field($model, 'state_reg') ?>

    <?php // echo $form->field($model, 'add_letter_1') ?>

    <?php // echo $form->field($model, 'add_letter_2') ?>

    <?php // echo $form->field($model, 'postcode_letter') ?>

    <?php // echo $form->field($model, 'district_letter') ?>

    <?php // echo $form->field($model, 'state_letter') ?>

    <?php // echo $form->field($model, 'leader_name') ?>

    <?php // echo $form->field($model, 'secretary_name') ?>

    <?php // echo $form->field($model, 'treasury_name') ?>

    <?php // echo $form->field($model, 'club_type') ?>

    <?php // echo $form->field($model, 'docs_completed') ?>

    <?php // echo $form->field($model, 'total_member') ?>

    <?php // echo $form->field($model, 'entrance_fee') ?>

    <?php // echo $form->field($model, 'member_fee') ?>

    <?php // echo $form->field($model, 'founded_dt') ?>

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
