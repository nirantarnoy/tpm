<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "submainmenu".
 *
 * @property integer $recid
 * @property integer $menurefid
 * @property string $name
 * @property string $description
 * @property string $createdate
 * @property string $photo
 * @property string $doc
 * @property integer $hassub
 */
class Submainmenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'submainmenu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menurefid'], 'required'],
            [['menurefid', 'hassub'], 'integer'],
            [['createdate'], 'safe'],
            [['name', 'description', 'photo', 'doc'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'recid' => 'Recid',
            'menurefid' => 'Menurefid',
            'name' => 'Name',
            'description' => 'Description',
            'createdate' => 'Createdate',
            'photo' => 'Photo',
            'doc' => 'Doc',
            'hassub' => 'Hassub',
        ];
    }
}
