<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SubmenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Submenus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="submenu-index">
 <?php if(1>2):?>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Submenu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'recid',
            //'menurefid',
             'name',
            [
              'attribute'=>'menurefid',
              'value'=>function($model){
                return $model->menurefid?$model->mainmenu->menuname:'';
              }
            ],
           
            'description',
            'createdate',
            // 'photo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    
    <?php endif;?>
    <?php echo kartik\tree\TreeView::widget([
            'query'=> \common\models\TblProduct::find()->addOrderBy('root, lft'), 
        // 'query' => Product::find()->addOrderBy('root, lft'), 
            'headingOptions' => ['label' => 'Menu List'],
            'fontAwesome' => false,     // optional
            'isAdmin' => false,         // optional (toggle to enable admin mode)
            //'displayValue' => 1,        // initial display value
            'softDelete' => false,       // defaults to true
            'cacheSettings' => [        
            'enableCache' => true   // defaults to true
             
            ],
          
    ]);?>
</div>
