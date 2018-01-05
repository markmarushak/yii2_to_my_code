<?php

namespace app\models;

use yii\db\ActiveRecord;
class ImagesPost extends ActiveRecord
{
    public static function tableName()
    {
        return 'images_post';
    }

    public $fotoFile;


    public function rules()
    {
        return [
            [['fotoFile'],'file','extensions'=>['png','jpg','gif'],'maxSize'=> 1024*2048],
        ];
    }


}