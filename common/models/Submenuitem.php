<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "submenuitem".
 *
 * @property integer $recid
 * @property integer $submenurefid
 * @property string $title
 * @property string $description
 * @property string $createdate
 * @property string $photo
 */
class Submenuitem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'submenuitem';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['submenurefid'], 'required'],
            [['submenurefid'], 'integer'],
            [['createdate'], 'safe'],
            [['title', 'description', 'photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'recid' => 'Recid',
            'submenurefid' => 'Submenurefid',
            'title' => 'Title',
            'description' => 'Description',
            'createdate' => 'Createdate',
            'photo' => 'Photo',
        ];
    }
}
