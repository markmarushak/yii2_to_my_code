<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "profile_field".
 *
 * @property integer $id
 * @property string $type
 */
class ProfileField extends ActiveRecord
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
            [['type','title','Required'], 'required'],
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

    public function getProfile() {
        return $this->hasOne(Profile::className(),['profile_field_id'=>'id']);
    }
}
