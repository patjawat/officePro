<?php

namespace app\modules\crm\models;

use Yii;

/**
 * This is the model class for table "crm_gender".
 *
 * @property string $id
 * @property string|null $name
 *
 * @property CrmCustomers[] $crmCustomers
 */
class Gender extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'crm_gender';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'string', 'max' => 5],
            [['name'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[CrmCustomers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCrmCustomers()
    {
        return $this->hasMany(CrmCustomers::className(), ['gender_id' => 'id']);
    }
}
