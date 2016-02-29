<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Submenuitem */

$this->title = 'Update Submenuitem: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Submenuitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->recid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="submenuitem-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
