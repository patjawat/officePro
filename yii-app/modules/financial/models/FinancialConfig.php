<?php

namespace app\modules\financial\models;

use Yii;

/**
 * This is the model class for table "financial_config".
 *
 * @property int $id รหัสประเภท
 * @property string $code
 * @property string $name ชื่อเรียก
 */
class FinancialConfig extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'financial_config';
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
            [['code', 'name'], 'required'],
            [['code'], 'string', 'max' => 100],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัสประเภท',
            'code' => 'Code',
            'name' => 'ชื่อเรียก',
        ];
    }
}
