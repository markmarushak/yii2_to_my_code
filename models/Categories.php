<?php
/**
 * Created by PhpStorm.
 * User: марк
 * Date: 13.12.2017
 * Time: 19:20
 */

namespace app\models;


use yii\db\ActiveRecord;

class Categories extends ActiveRecord
{

    public static function tableName(){
        return 'categories';
    }

    public function getPost(){
        return $this->hasMany(Post::className(),['categories_id'=>'id']);
    }

}