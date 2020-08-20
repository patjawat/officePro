<?php

namespace app\modules\mr\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\mr\models\Events;

/**
 * EventsSearch represents the model behind the search form of `app\models\Events`.
 */
class EventsSearch extends Events
{
    public $q;
    public function rules()
    {
        return [
            [['id', 'room_id', 'created_by', 'updated_by'], 'integer'],
            [['start','end','created_at', 'updated_at','q'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Events::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'room_id' => $this->room_id,
            'start' => $this->start,
            'end' => $this->end,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        return $dataProvider;
    }
}