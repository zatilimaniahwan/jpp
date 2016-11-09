<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<div class="panel panel-info">
    <div class="panel-body">
        <?php
        $this->title = 'Selenggara Menu';
        $this->params['breadcrumbs'][] = $this->title;
        ?>
        <div class="menu-index">

            <h1><?= Html::encode($this->title) ?></h1>
<?php // echo $this->render('_search', ['model' => $searchModel]);   ?>

            <p>
            <?= Html::a('Tambah Menu', ['create'], ['class' => 'btn btn-success']) ?>
            </p>
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
//                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'id',
                    'title_my',
                    'title_en',
                    'type',
                    'parent_id',
                    // 'display_status',
                    // 'url:url',
                    // 'icon',
                    // 'created_by',
                    // 'created_dt',
                    // 'updated_by',
                    // 'updated_dt',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
        </div>
    </div>
</div>

