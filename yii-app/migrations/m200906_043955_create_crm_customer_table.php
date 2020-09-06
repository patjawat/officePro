<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%crm_customer}}`.
 */
class m200906_043955_create_crm_customer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%crm_customers}}', [
            'id' => $this->primaryKey(),
            'gender_id' => $this->String()->notNull(),
            'fname' => $this->String(255),
            'lname' => $this->String(255),
            'birthdate' => $this->Date(),
            'address' => $this->String(255),
            'zip_code' => $this->Integer()
            
        ]);

        $this->createTable('{{%crm_gender}}', [
            'id' => $this->String(5),
            'name' => $this->String(255),
        ]);

        $this->addPrimaryKey('add_py_gender', 'crm_gender', 'id');
        $this->insert('crm_gender', ['id' => 'M','name' => 'ชาย']);
        $this->insert('crm_gender',['id' => 'F','name' => 'หญิง']);

        $this->addForeignKey('fk-gender-gender_id','crm_customers','gender_id','crm_gender','id','CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%crm_customer}}');
        return true;
    }
}
