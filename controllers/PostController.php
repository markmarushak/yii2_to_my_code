<?php


namespace app\controllers;

use app\models\Post;
use yii\web\Controller;
use yii;

class PostController extends Controller
{
    public function actionIndex()
    {
        $model = Post::find()->all();

        return $this->render('index',['model'=>$model]);
    }

    public function actionAdd()
    {
        $model = new Post();

        if($model->load(Yii::$app->request->post())){
            if ($model->validate()){
                Yii::$app->session->setFlash('sucsses','Данные приняты!');
                return $this->render('check', compact('model'));
            }else{
                Yii::$app->session->setFlash('error','');
            }
        }

        return $this->render('add',compact('model'));
    }




    public function actionPost($id)
    {
        $post = Post::findOne($id);

        return $this->render('post',compact('post'));
    }

}