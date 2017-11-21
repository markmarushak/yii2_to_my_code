<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $profile_field
 * @property integer $value
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }



    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'profile_field', 'value'], 'required'],
            [['user_id', 'profile_field', 'value'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'profile_field' => 'Profile Field',
            'value' => 'Value',
        ];
    }

    public function getUser(){
        return $this->hasOne(User::className(),['id'=>'user_id']);
    }

    public function getProfileField(){
        return $this->hasOne(ProfileField::className(),['id'=>'profile_field_id']);
    }
}
