<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile_field".
 *
 * @property integer $id
 * @property string $type
 */
class ProfileField extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile_field';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type','title'], 'required'],
            [['type'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'type' => 'Type',
        ];
    }
}
