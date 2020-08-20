<?php

namespace app\modules\mr\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property int $id รหัส
 * @property string $name ชื่อห้องประชุม
 * @property string|null $class
 * @property string|null $color
 */
class Room extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'room';
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
            [['name'], 'required'],
            [['name', 'class', 'color'], 'string', 'max' => 255],
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
            'class' => 'Class',
            'color' => 'Color',
        ];
    }
}
