<?php

use yii\db\Migration;

/**
 * Handles the creation of table `video_post`.
 */
class m171205_202633_create_video_post_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('video_post', [
            'id' => $this->primaryKey(),
            'post_id'=>$this->integer(),
            'path'=>$this->string(),
            'nameFile'=>$this->string(),
            'nameFolder'=>$this->string(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('video_post');
    }
}
