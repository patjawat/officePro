<?php

namespace app\modules\mr\models;

use Yii;

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
            [['data_json'], 'string'],
            [['name'], 'string', 'max' => 255],
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
}
