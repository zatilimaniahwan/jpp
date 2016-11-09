<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ApplicantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Applicants';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicant-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Applicant', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ref_no',
            'user_id',
            'password',
            'club_name',
            // 'add_reg_1',
            // 'add_reg_2',
            // 'postcode_reg',
            // 'district_reg',
            // 'state_reg',
            // 'add_letter_1',
            // 'add_letter_2',
            // 'postcode_letter',
            // 'district_letter',
            // 'state_letter',
            // 'leader_name',
            // 'secretary_name',
            // 'treasury_name',
            // 'club_type',
            // 'docs_completed',
            // 'total_member',
            // 'entrance_fee',
            // 'member_fee',
            // 'founded_dt',
            // 'created_by',
            // 'created_dt',
            // 'updated_by',
            // 'updated_dt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
