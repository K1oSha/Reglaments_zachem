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
            [['id', 'state', 'state_expert', 'state_prok'], 'integer'],
            [['message',   'comment_expert', 'comment_prok'], 'safe'],
        ];
    }

    public static function tableName()
    {
        return 'reglaments'; // TODO: Change the autogenerated stub
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
    public function search($params,$params_bad=0)
    {
        $query = Reglaments::find();
        if($params_bad==1)
        {
            $query->where(['state'=>0]);
        }
        if($params_bad==0)
        {
            $query->where(['state'=>1]);
        }
        if($params_bad==2)
        {
            $query->where(['state_prok'=>2]);
        }
        if($params_bad==3)
        {
            $query->where(['and',['state_prok'=> 0]]);
        }
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
//            'state_upr' => $this->state_upr,
//            'state_gov' => $this->state_gov,
            'state_expert' => $this->state_expert,
            'state_prok' => $this->state_prok,
//            'state_economics' => $this->state_economics,
        ]);

        $query->andFilterWhere(['like', 'message', $this->message])
//            ->andFilterWhere(['like', 'comment_upr', $this->comment_upr])
//            ->andFilterWhere(['like', 'comment_gov', $this->comment_gov])
            ->andFilterWhere(['like', 'comment_expert', $this->comment_expert])
            ->andFilterWhere(['like', 'comment_prok', $this->comment_prok]);
//            ->andFilterWhere(['like', 'comment_economics', $this->comment_economics]);

        return $dataProvider;
    }
}
