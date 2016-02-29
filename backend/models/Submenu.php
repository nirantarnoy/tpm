<?php
namespace backend\Models;
use yii\db\ActiveRecord;
class Submenu extends \common\models\Submainmenu{
     public function behaviors() {
          $current_timestamp = date('Y-m-d H:i:s');
        return[
            'timestamp'=>[
                'class'=>  \yii\behaviors\AttributeBehavior::className(),
                'attributes'=>[
                ActiveRecord::EVENT_BEFORE_INSERT=>'createdate',
                ],
                'value'=> $current_timestamp,
            ]
        ];
    }
     public function getMainmenu(){
        return $this->hasOne(\common\models\Mainmenu::className(), ['recid'=>'menurefid']);
    }
}
