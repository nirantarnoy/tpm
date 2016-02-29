<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Submenu */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Submenus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="submenu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'recid' => $model->recid, 'menurefid' => $model->menurefid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'recid' => $model->recid, 'menurefid' => $model->menurefid], [
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
            'recid',
            'menurefid',
            'name',
            'description',
            'createdate',
            'photo',
        ],
    ]) ?>

</div>
