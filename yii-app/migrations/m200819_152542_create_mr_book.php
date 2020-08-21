<?php

use yii\db\Migration;

/**
 * Class m200819_152542_create_mr
 */
class m200819_152542_create_mr_book extends Migration
{
    public function init()
    {
        $this->db = 'mr';
        parent::init();
    }

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('mr_books', [
            'id' => $this->primaryKey(),
            'mr_room_id' => $this->integer()->notNull(),
            'topic' => $this->string(255),
            'content' => $this->text(),
            'photo' => $this->string(255),
            'cost' => $this->integer(),
            'price' => $this->integer(),
            'status' => $this->integer(1),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            ]);
            
        }
        
        /**
         * {@inheritdoc}
         */
    public function safeDown()
    {
        echo "m200819_152542_create_mr cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200819_152542_create_mr cannot be reverted.\n";

        return false;
    }
    */
    public function down()
    {
        $this->dropTable('mr_books');
        return true;
    }
}