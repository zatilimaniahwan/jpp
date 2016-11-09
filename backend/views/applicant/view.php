<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Applicant */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Applicants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicant-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'ref_no',
            'user_id',
            'password',
            'club_name',
            'add_reg_1',
            'add_reg_2',
            'postcode_reg',
            'district_reg',
            'state_reg',
            'add_letter_1',
            'add_letter_2',
            'postcode_letter',
            'district_letter',
            'state_letter',
            'leader_name',
            'secretary_name',
            'treasury_name',
            'club_type',
            'docs_completed',
            'total_member',
            'entrance_fee',
            'member_fee',
            'founded_dt',
            'created_by',
            'created_dt',
            'updated_by',
            'updated_dt',
        ],
    ]) ?>

</div>
