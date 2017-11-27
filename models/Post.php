<?php
/**
 * Created by PhpStorm.
 * User: марк
 * Date: 23.11.2017
 * Time: 21:45
 */

namespace app\models;

use yii\db\ActiveRecord;

class Post extends ActiveRecord
{

    public static function tableName()
    {
        return 'add_post';
    }


    public function rules()
    {
        return [
        [['caption','searchCountry','searchRegion','searchCity','event','description'],'required'],
        [['caption','fotoDescr','videoDescr','map'],'string'],
        [['fotoFile'],'file','extensions'=>['png','jpg','gif'],'maxSize'=> 1000*1000],
        [['videoFile'],'file','extensions'=>['avi','wmv','mov','mkv','3gp','flv','swf','rm','ra','ram','hd','mpeg-4','mpeg-2','mpeg-1','mpeg']],

            ];
    }


}