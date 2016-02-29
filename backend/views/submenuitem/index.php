<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SubmenuitemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Submenuitems';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="submenuitem-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Submenuitem', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'recid',
            'submenurefid',
            'title',
            'description',
            'createdate',
            // 'photo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
