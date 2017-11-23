<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $profile_field
 * @property integer $value
 */
class Profile extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }


    public function rules()
    {
        return [
            [['text'], 'required'],
        ];
    }


    public function getUser(){
        return $this->hasOne(User::className(),['id'=>'user_id']);
    }

    public function getProfileField(){
        return $this->hasOne(ProfileField::className(),['id'=>'profile_field_id']);
    }
}
