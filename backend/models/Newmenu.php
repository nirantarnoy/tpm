<?php
namespace backend\models;
class Newmenu extends \kartik\tree\models\Tree{
    public static function tableName()
    {
        return 'tbl_product';
    }    
    public function isDisabled()
    {
        if (Yii::$app->user->username !== 'admin') {
            return true;
        }
        return parent::isDisabled();
    }
}

