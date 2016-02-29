<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menus".
 *
 * @property integer $recid
 * @property string $menuname
 * @property string $description
 * @property integer $level
 * @property integer $isparent
 * @property string $photo
 * @property string $document
 * @property integer $refid
 * @property string $createdate
 * @property integer $createby
 */
class Menus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['level', 'isparent', 'refid', 'createby'], 'integer'],
            [['createdate'], 'safe'],
            [['menuname', 'description', 'photo', 'document'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'level' => 'Level',
            'isparent' => 'Isparent',
            'photo' => 'Photo',
            'document' => 'Document',
            'refid' => 'Refid',
            'createdate' => 'Createdate',
            'createby' => 'Createby',
        ];
    }
}
