<?php

namespace app\modules\financial\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\financial\models\Customers;

/**
 * CustomersSearch represents the model behind the search form of `app\modules\financial\models\Customers`.
 */
class CustomersSearch extends Customers
{
    public $q;

    public function rules()
    {
        return [
            [['id', 'fullname'], 'integer'],
            [['address','q'], 'safe'],
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
        $query = Customers::find();

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
            'fullname' => $this->fullname,
        ]);

        $query->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }
}
