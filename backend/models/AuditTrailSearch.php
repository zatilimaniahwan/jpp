<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AuditTrail;

/**
 * AuditTrailSearch represents the model behind the search form about `app\models\AuditTrail`.
 */
class AuditTrailSearch extends AuditTrail
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'menu_id', 'data_id'], 'integer'],
            [['user_id', 'action_dt', 'action_type'], 'safe'],
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
        $query = AuditTrail::find();

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
            'menu_id' => $this->menu_id,
            'action_dt' => $this->action_dt,
            'data_id' => $this->data_id,
        ]);

        $query->andFilterWhere(['like', 'user_id', $this->user_id])
            ->andFilterWhere(['like', 'action_type', $this->action_type]);

        return $dataProvider;
    }
}
