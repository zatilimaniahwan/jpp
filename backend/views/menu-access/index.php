<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MenuAccessSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Menu Accesses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-access-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Menu Access', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'menu_id',
            'role_i',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
