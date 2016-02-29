<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Submenuitem */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Submenuitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="submenuitem-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->recid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->recid], [
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
            'submenurefid',
            'title',
            'description',
            'createdate',
            'photo',
        ],
    ]) ?>

</div>
