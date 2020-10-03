<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Reglaments;

/**
 * ReglamentsSearch represents the model behind the search form of `app\models\Reglaments`.
 */
class ReglamentsSearch extends Reglaments
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'state', 'state_upr', 'state_gov', 'state_expert', 'state_prok', 'state_economics'], 'integer'],
            [['message', 'comment_upr', 'comment_gov', 'comment_expert', 'comment_prok', 'comment_economics'], 'safe'],
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
        $query = Reglaments::find();

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
            'state' => $this->state,
            'state_upr' => $this->state_upr,
            'state_gov' => $this->state_gov,
            'state_expert' => $this->state_expert,
            'state_prok' => $this->state_prok,
            'state_economics' => $this->state_economics,
        ]);

        $query->andFilterWhere(['like', 'message', $this->message])
            ->andFilterWhere(['like', 'comment_upr', $this->comment_upr])
            ->andFilterWhere(['like', 'comment_gov', $this->comment_gov])
            ->andFilterWhere(['like', 'comment_expert', $this->comment_expert])
            ->andFilterWhere(['like', 'comment_prok', $this->comment_prok])
            ->andFilterWhere(['like', 'comment_economics', $this->comment_economics]);

        return $dataProvider;
    }
}
