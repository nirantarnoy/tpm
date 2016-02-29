<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Submenuitem */

$this->title = 'Create Submenuitem';
$this->params['breadcrumbs'][] = ['label' => 'Submenuitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="submenuitem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
