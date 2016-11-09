<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Roles */

$this->title = Yii::t('app', 'Create Role');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Roles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roles-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
