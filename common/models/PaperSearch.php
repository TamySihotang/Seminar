<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Paper;

/**
 * PaperSearch represents the model behind the search form about `common\models\Paper`.
 */
class PaperSearch extends Paper
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_paper', 'user_id'], 'integer'],
            [['pre_paper', 'final_paper', 'status', 'modified_time'], 'safe'],
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
        $query = Paper::find();

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
            'id_paper' => $this->id_paper,
            'user_id' => $this->user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'pre_paper', $this->pre_paper])
            ->andFilterWhere(['like', 'final_paper', $this->final_paper])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
