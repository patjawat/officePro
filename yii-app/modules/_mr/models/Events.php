<?php

namespace app\modules\mr\models;

use Yii;
use yii\behaviors\AttributeBehavior;
use yii\behaviors\BlameableBehavior;
use yii\db\Expression;
use yii\helpers\Json;
use \yii\db\ActiveRecord;

class Events extends \yii\db\ActiveRecord
{
    public $q;
    public static function tableName()
    {
        return 'events';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('dbroom');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'body', 'room_id', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'required'],
            [['body'], 'string'],
            [['room_id', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at', 'start', 'end', 'gadget', 'q'], 'safe'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'ชื่อเรื่อง',
            'body' => 'เนื้อหา',
            'room_id' => 'ห้องประชุม',
            'start' => 'เริ่ม',
            'end' => 'สิ้นสุด',
            'gadget' => 'อุปกรณ์',
            'q'=> 'ค้นหา...', 
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
    public function behaviors()
    {
        return [
            [
                'class' => AttributeBehavior::className(),
                'attributes' => [ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at']],
                'value' => new Expression('NOW()'),
            ],
            [
                'class' => AttributeBehavior::className(),
                'attributes' => [ActiveRecord::EVENT_BEFORE_UPDATE => 'updated_at'],
                'value' => new Expression('NOW()'),
            ],
            [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ],
        ];
    }

    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'room_id']);
    }

    public function afterFind()
    {
        $this->gadget = Json::decode($this->gadget, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        return parent::afterFind();
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->gadget = Json::encode($this->gadget, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
            return true;
        } else {
            return false;
        }
    }
}