<?php

namespace app\modules\mr\models;

use Yii;

/**
 * This is the model class for table "mr_books".
 *
 * @property int $id
 * @property string|null $topic
 * @property string|null $content
 * @property string|null $photo
 * @property int|null $cost
 * @property int|null $price
 * @property int|null $status
 * @property string $created_at
 * @property string $updated_at
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mr_books';
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
            [['content'], 'string'],
            [['cost', 'price', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['topic', 'photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'topic' => 'Topic',
            'content' => 'Content',
            'photo' => 'Photo',
            'cost' => 'Cost',
            'price' => 'Price',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
