<?php

namespace app\modules\mr\models;

use Yii;
use yii\helpers\Json;

/**
 * This is the model class for table "mr_meeting_room".
 *
 * @property int $id รหัส
 * @property string $name ชื่อห้องประชุม
 * @property string|null $data_json
 */
class MeetingRoom extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mr_meeting_room';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('mr');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name','photo'], 'string', 'max' => 255],
            [['data_json'], 'safe'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'รหัส',
            'name' => 'ชื่อห้องประชุม',
            'data_json' => 'Data Json',
        ];
    }
    public function afterFind() {
        $this->data_json = Json::decode($this->data_json, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        return parent::afterFind();
    }
    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            $this->data_json = Json::encode($this->data_json, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
            return true;
        } else {
            return false;
        }
    }
}
