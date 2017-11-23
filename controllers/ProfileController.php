<?php

namespace app\controllers;

use app\models\Profile;
use app\models\ProfileField;
use yii\web\Controller;
use yii;
/**
 * ProfileController implements the CRUD actions for Profile model.
 */
class ProfileController extends Controller
{
       public function actionIndex(){



           $model = new ProfileField();


               return $this->render('index',[
                   'model'=>$model,
               ]);

//           }




       }
}
