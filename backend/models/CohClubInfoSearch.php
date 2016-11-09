<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CohClubInfo;

/**
 * CohClubInfoSearch represents the model behind the search form about `app\models\CohClubInfo`.
 */
class CohClubInfoSearch extends CohClubInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'club_ref'], 'integer'],
            [['amount', 'created_by', 'created_dt', 'updated_by', 'updated_dt'], 'safe'],
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
        $query = CohClubInfo::find();

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
            'club_ref' => $this->club_ref,
            'created_dt' => $this->created_dt,
            'updated_dt' => $this->updated_dt,
        ]);

        $query->andFilterWhere(['like', 'amount', $this->amount])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'updated_by', $this->updated_by]);

        return $dataProvider;
    }
}
