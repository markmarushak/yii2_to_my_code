<?php

use yii\db\Migration;

/**
 * Class m171129_200052_creat_images_post_table
 */
class m171129_200052_creat_images_post_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('images_post',[
            'id'=>$this->primaryKey(),
            'path'=>$this->string(),
            'name'=>$this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171129_200052_creat_images_post_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171129_200052_creat_images_post_table cannot be reverted.\n";

        return false;
    }
    */
}
