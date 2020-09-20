<?php

namespace app\modules\mr\models;

use Yii;

/**
 * This is the model class for table "mr_books".
 *
 * @property int $id
 * @property int $category_id ห้องประชุม
 * @property string|null $topic
 * @property string|null $data_json
 * @property string $created_at
 * @property string $updated_at
 *
 * @property MrCategory $category
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
            [['category_id'], 'required'],
            [['category_id'], 'integer'],
            [['data_json'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['topic'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => MrCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'ห้องประชุม',
            'topic' => 'Topic',
            'data_json' => 'Data Json',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(MrCategory::className(), ['id' => 'category_id']);
    }
}
