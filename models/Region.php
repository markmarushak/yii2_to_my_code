<?php
/**
 * Created by PhpStorm.
 * User: марк
 * Date: 14.12.2017
 * Time: 16:47
 */

namespace app\models;


use yii\db\ActiveRecord;

class Region extends ActiveRecord
{

    public static function tableName()
    {
        return 'region';
    }

}