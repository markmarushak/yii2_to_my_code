<?php

namespace app\controllers;

use yii\web\Controller;


class TestControlle extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }


}