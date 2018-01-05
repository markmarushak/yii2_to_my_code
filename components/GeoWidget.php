<?php

namespace app\components;

use app\models\Country;
use yii\base\Widget;

class GeoWidget extends Widget
{

    public function run()
    {
        $country = Country::findAll([##3159,
            9908,248,1894]);
        return $this->render('geo',[
            'country' => $country,
        ]);
    }

}