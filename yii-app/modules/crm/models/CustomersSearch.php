<?php

namespace app\modules\crm\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\crm\models\Customers;

/**
 * CustomersSearch represents the model behind the search form of `app\modules\crm\models\Customers`.
 */
class CustomersSearch extends Customers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'zip_code'], 'integer'],
            [['gender_id', 'fname', 'lname', 'birthdate', 'address'], 'safe'],
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
            'birthdate' => $this->birthdate,
            'zip_code' => $this->zip_code,
        ]);

        $query->andFilterWhere(['like', 'gender_id', $this->gender_id])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }
}
