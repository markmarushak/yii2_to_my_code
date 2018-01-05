<?php


namespace app\models;


use yii\db\ActiveRecord;

class VideoPost extends ActiveRecord
{

    public static function tableName()
    {
        return 'video_post';
    }

    public $videoFile;



    public function rules()
    {
        return [
            [['videoFile'],'file','extensions'=>['avi','wmv','mov','mkv','3gp','flv','swf','rm','ra','ram','hd','mpeg-4','mpeg-2','mpeg-1','mpeg']],
        ];
    }




}