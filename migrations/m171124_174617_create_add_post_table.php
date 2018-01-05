<?php

use yii\db\Migration;

/**
 * Handles the creation of table `add_post`.
 */
class m171124_174617_create_add_post_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('add_post', [
            'id' => $this->primaryKey(),
            'user_id' =>$this->integer(),
            'caption'=>$this->string(),
            'searchCountry' =>$this->string(),
            'searchRegion'=>$this->string(),
            'searchCity'=>$this->string(),
            'event'=>$this->string(),

            'description'=>$this->text(),

            'fotoFile'=>$this->string(),
            'fotoDescr'=>$this->text(),

            'videoFile'=>$this->string(),
            'videoDescr'=>$this->text(),

            'map'=>$this->string(),
        ]);
        $this->addForeignKey('FK_post_event_id_event', 'add_post', 'event_id', 'event', 'id', 'RESTRICT');

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('add_post');
    }
}
