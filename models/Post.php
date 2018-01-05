<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
class Post extends ActiveRecord
{


    public static function tableName()
    {
        return 'add_post';
    }
    public $fotoFile;
    public $videoFile;



    public function rules()
    {
        return [
                [['caption','city','event_id','description'],'required'],
                [['caption','fotoDescr','videoDescr','map','description'],'string'],
                [['fotoFile'],'file','extensions'=>['png','jpg','gif'],'maxSize'=> 1024*2048],
                [['videoFile'],'file','extensions'=>['avi','wmv','mov','mkv','3gp','flv','swf','rm','ra','ram','hd','mpeg-4','mpeg-2','mpeg-1','mpeg']],
            ];
    }



    /**
     * @return bool
     */
    public function uploadImg()
    {
        $imgPath = new ImagesPost();
        $rootfolder = 'img/';
        $path = Yii::getAlias('@web').$rootfolder;

        if ($this->validate()) {

            if ($this->fotoFile->saveAs($path . $this->event . '/' . $this->fotoFile->baseName . '.' . $this->fotoFile->extension, false)) {
                if (!$this->id == null) {
                    $imgPath->post_id = $this->id;
                    $imgPath->path = $rootfolder;
                    $imgPath->nameFile = $this->fotoFile->baseName . '.' . $this->fotoFile->extension;
                    $imgPath->nameFolder = $this->event;
                    $imgPath->save();
                }else{
                    return false;
                }
            }
        }
    }



    public function uploadVideo()
    {
        $videoPath = new VideoPost();
        $rootfolder = 'img/';
        $path = Yii::getAlias('@web').$rootfolder;

            if ($this->videoFile->saveAs($path . $this->event . '/' . $this->videoFile->baseName . '.' . $this->videoFile->extension,false)) {
                if (!$this->id == null) {
                    $videoPath->post_id = $this->id;
                    $videoPath->path = $rootfolder;
                    $videoPath->nameFile = $this->videoFile->baseName . '.' . $this->videoFile->extension;
                    $videoPath->nameFolder = $this->event;
                    $videoPath->save();
                } else {
                    return false;
                }
            }
    }

    public function getEvents()
    {
        return $this->hasMany(Event::className(),['id' => 'event_id']);
    }

    public function getCategories()
    {
        return $this->hasOne(Categories::className(),['id' => 'categories_id']);
    }


    public function getCites()
    {
        return $this->hasMany(City::className(),['city_id' => 'city']);
    }

    public function getImages()
    {
            return $this->hasMany(ImagesPost::className(),['post_id'=>'id']);
    }



    public function getVideo()
    {
        return $this->hasMany(VideoPost::className(),['post_id'=>'id']);
    }









}