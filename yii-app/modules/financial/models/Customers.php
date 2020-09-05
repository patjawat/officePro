<?php

namespace app\modules\financial\models;

use Yii;

/**
 * This is the model class for table "financial_customers".
 *
 * @property int $id
 * @property string $fullname
 * @property string $address
 */
class Customers extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'financial_customers';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('financial');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname', 'address'], 'required'],
            [['fullname', 'address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullname' => 'Fullname',
            'address' => 'Address',
        ];
    }
}
