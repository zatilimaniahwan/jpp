<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = Yii::t('app', 'Profil Pengguna');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Selenggara Pengguna'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-info">
    <div class="panel-body">
<div class="user-view">

    <p>
        <?= Html::a(Yii::t('app', 'Kemaskini'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Hapus'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Anda pasti ingin memadam pengguna ini?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
//            'auth_key',
//            'password_hash',
//            'password_reset_token',
            'email:email',
//            'last_login',
//            'last_login_attempts',
//            'login_attempts',
//            'status',
//            'is_admin',
//            'created_at',
//            'updated_at',
        ],
    ]) ?>

</div></div></div>
