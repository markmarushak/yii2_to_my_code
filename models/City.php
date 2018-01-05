<?php
/**
 * Created by PhpStorm.
 * User: марк
 * Date: 14.12.2017
 * Time: 16:48
 */

namespace app\models;


use yii\db\ActiveRecord;

class City extends ActiveRecord
{

    public static function tableName()
    {
        return 'city';
    }

    public function getCountries()
    {
        return $this->hasMany(Country::className(),['country_id' => 'country_id']);
    }

    public function getRegions()
    {
        return $this->hasMany(Region::className(),['region_id' => 'region_id']);
    }

}