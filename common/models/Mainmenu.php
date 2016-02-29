<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mainmenu".
 *
 * @property integer $recid
 * @property string $menuname
 * @property string $createdate
 */
class Mainmenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mainmenu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['createdate'], 'safe'],
            [['menuname'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'recid' => 'Recid',
            'menuname' => 'Menuname',
            'createdate' => 'Createdate',
        ];
    }
}
