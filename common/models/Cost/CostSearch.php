<?php

namespace common\models\Cost;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Cost\Cost;

/**
 * CostSearch represents the model behind the search form about `common\models\Cost\Cost`.
 */
class CostSearch extends Cost
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['accomodation', 'register'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Cost::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'accomodation', $this->accomodation])
            ->andFilterWhere(['like', 'register', $this->register]);

        return $dataProvider;
    }
}
