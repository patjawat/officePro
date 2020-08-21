<?php

use yii\db\Migration;

/**
 * Class m200820_141218_create_mr_meeting_room
 */
class m200820_141218_create_mr_meeting_room extends Migration
{
    public function init()
    {
        $this->db = 'mr';
        parent::init();
    }

    public function safeUp()
    {
        $this->createTable('mr_meeting_room',[
            'id' => $this->primaryKey()->comment('รหัส'),
            'name' => $this->string(255)->notNull()->comment('ชื่อห้องประชุม'),
            'photo' => $this->string(255)->comment('รูปภาพ'),
            'data_json' => $this->json(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200820_141218_create_mr_meeting_room cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200820_141218_create_mr_meeting_room cannot be reverted.\n";

        return false;
    }
    */
    public function down()
    {
        $this->dropTable('mr_meeting_room');
        return true;
    }
}
