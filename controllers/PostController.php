<?php


namespace app\controllers;


use app\models\Categories;
use app\models\City;
use app\models\Country;
use app\models\Event;
use app\models\Region;
use app\models\VideoPost;
use Yii;
use yii\data\Pagination;
use yii\helpers\FileHelper;
use yii\web\Controller;
use yii\web\UploadedFile;
use app\models\ImagesPost;
use app\models\Post;
use app\models\PostSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class PostController extends Controller
{
    public function actionIndex($categoryId)
    {
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search([],$categoryId);

        $category = Categories::find()->where(['id' => $categoryId])->one();

        return $this->render('index',[
            'category' => $category,
            'dataProvider' => $dataProvider,


        ]);
    }



    public function actionAdd($categoryId)
    {
        $post = new Post();
        $post->user_id = Yii::$app->user->identity->id;
        $post->categories_id = $categoryId;
        $event = Event::find()->all();
        if($post->load(Yii::$app->request->post()) && $post->save() ){
//            if(!is_dir(Yii::getAlias('@web').'img/'.$post->event_id)){
//                FileHelper::createDirectory(Yii::getAlias('@web').'img/'.$post->event_id);
//            }


//                    if ($post->fotoFile = UploadedFile::getInstance($post,'fotoFile')){
//                        $post->uploadImg();
//                    }
//                    if ($post->videoFile = UploadedFile::getInstance($post,'videoFile')){
//                        $post->uploadVideo();
//                    }
            return Yii::$app->response->redirect(['post/post',' id' => $post->id ]);
        }

        return $this->render('add', [
            'post' => $post,
            'event' => $event,
        ]);
    }

    public function actionPost($id)
    {
        $post = Post::findOne($id);
        $gps = City::findOne($post->city);
        return $this->render('post',[
            'post' => $post,
            'gps' => $gps,
        ]);
    }

    public function actionSearchGlobal()
    {
        $searchModel = new PostSearch();

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('_search_res', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

}