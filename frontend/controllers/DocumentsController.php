<?php
namespace frontend\controllers;

class DocumentsController extends \yii\web\Controller{
    public function actionIndex(){
       return '';
    }
    public function actionShowdoc($id){
         $modelheader = \common\models\Product::findOne($id);
     //    $model = \common\models\Product::find()->where(['root'=>$id])->andWhere(['=','parentid',$id])->all();
        $model = \common\models\Product::find()->where(['=','parentid',$id])->all();
        return $this->render('index',['modelheader'=>$modelheader,'model'=>$model,]);
    }
}
