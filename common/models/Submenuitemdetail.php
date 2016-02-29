<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "submenuitemdetail".
 *
 * @property integer $recid
 * @property integer $subitemrefid
 * @property string $title
 * @property string $description
 * @property string $document
 * @property string $doccumenttype
 * @property string $createdate
 */
class Submenuitemdetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'submenuitemdetail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subitemrefid'], 'required'],
            [['subitemrefid'], 'integer'],
            [['createdate'], 'safe'],
            [['title', 'description', 'document', 'doccumenttype'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'recid' => 'Recid',
            'subitemrefid' => 'Subitemrefid',
            'title' => 'Title',
            'description' => 'Description',
            'document' => 'Document',
            'doccumenttype' => 'Doccumenttype',
            'createdate' => 'Createdate',
        ];
    }
}
