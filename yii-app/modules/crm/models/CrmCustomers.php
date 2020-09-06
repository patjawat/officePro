<?php

namespace app\modules\crm\models;

use Yii;

/**
 * This is the model class for table "crm_customers".
 *
 * @property int $id
 * @property string $gender_id เพศ
 * @property string $fname ชื่อ
 * @property string $lname นามสกุล
 * @property string $birthdate วันเกิด
 * @property string $address ที่อยู่
 * @property int|null $zip_code รหัสไปรษณี
 *
 * @property CrmGender $gender
 */
class CrmCustomers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'crm_customers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gender_id', 'fname', 'lname', 'birthdate', 'address'], 'required'],
            [['birthdate'], 'safe'],
            [['zip_code'], 'integer'],
            [['gender_id', 'fname', 'lname', 'address'], 'string', 'max' => 255],
            [['gender_id'], 'exist', 'skipOnError' => true, 'targetClass' => CrmGender::className(), 'targetAttribute' => ['gender_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gender_id' => 'เพศ',
            'fname' => 'ชื่อ',
            'lname' => 'นามสกุล',
            'birthdate' => 'วันเกิด',
            'address' => 'ที่อยู่',
            'zip_code' => 'รหัสไปรษณี',
        ];
    }

    /**
     * Gets query for [[Gender]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGender()
    {
        return $this->hasOne(CrmGender::className(), ['id' => 'gender_id']);
    }
}
