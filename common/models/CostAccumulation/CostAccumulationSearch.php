<?php

namespace common\models\CostAccumulation;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CostAccumulation\CostAccumulation;

/**
 * CostAccumulationSearch represents the model behind the search form about `common\models\CostAccumulation\CostAccumulation`.
 */
class CostAccumulationSearch extends CostAccumulation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'member_id', 'paper_id', 'cost_id'], 'integer'],
            [['item', 'item_cost', 'total', 'due_date', 'status'], 'safe'],
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
        $query = CostAccumulation::find();

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
            'member_id' => $this->member_id,
            'paper_id' => $this->paper_id,
            'cost_id' => $this->cost_id,
            'due_date' => $this->due_date,
        ]);

        $query->andFilterWhere(['like', 'item', $this->item])
            ->andFilterWhere(['like', 'item_cost', $this->item_cost])
            ->andFilterWhere(['like', 'total', $this->total])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
