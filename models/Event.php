<?php
/**
 * Created by PhpStorm.
 * User: марк
 * Date: 22.12.2017
 * Time: 6:13
 */

namespace app\models;


use yii\db\ActiveRecord;

class Event extends ActiveRecord
{

    public static function tableName()
    {
        return 'event';
    }

}