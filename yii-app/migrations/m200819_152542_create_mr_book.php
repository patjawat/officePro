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
            'category_id' => $this->integer()->notNull()->comment('ห้องประชุม'),
            'date_start' => $this->date(),
            'date_end' => $this->date(),
            'status' => $this->integer(),
            'data_json' => $this->json(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
            ]);
            
            
            $this->createTable('mr_category',[
                'id' => $this->primaryKey()->comment('รหัส'),
                'type' => $this->string(255)->notNull()->comment('หมวดหมู่'),
                'name' => $this->string(255)->notNull()->comment('ชื่อห้องประชุม'),
                'photo' => $this->string(255)->comment('รูปภาพ'),
                'data_json' => $this->json(),
                ]);
                
                $this->addForeignKey('fk-book-categioy_id','mr_books','category_id','mr_category','id','CASCADE');
              
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