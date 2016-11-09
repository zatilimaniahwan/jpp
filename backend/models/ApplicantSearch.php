<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Applicant;

/**
 * ApplicantSearch represents the model behind the search form about `app\models\Applicant`.
 */
class ApplicantSearch extends Applicant
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'club_type'], 'integer'],
            [['ref_no', 'user_id', 'password', 'club_name', 'add_reg_1', 'add_reg_2', 'postcode_reg', 'district_reg', 'state_reg', 'add_letter_1', 'add_letter_2', 'postcode_letter', 'district_letter', 'state_letter', 'leader_name', 'secretary_name', 'treasury_name', 'docs_completed', 'total_member', 'entrance_fee', 'member_fee', 'founded_dt', 'created_by', 'created_dt', 'updated_by', 'updated_dt'], 'safe'],
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
        $query = Applicant::find();

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
            'club_type' => $this->club_type,
            'created_dt' => $this->created_dt,
            'updated_dt' => $this->updated_dt,
        ]);

        $query->andFilterWhere(['like', 'ref_no', $this->ref_no])
            ->andFilterWhere(['like', 'user_id', $this->user_id])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'club_name', $this->club_name])
            ->andFilterWhere(['like', 'add_reg_1', $this->add_reg_1])
            ->andFilterWhere(['like', 'add_reg_2', $this->add_reg_2])
            ->andFilterWhere(['like', 'postcode_reg', $this->postcode_reg])
            ->andFilterWhere(['like', 'district_reg', $this->district_reg])
            ->andFilterWhere(['like', 'state_reg', $this->state_reg])
            ->andFilterWhere(['like', 'add_letter_1', $this->add_letter_1])
            ->andFilterWhere(['like', 'add_letter_2', $this->add_letter_2])
            ->andFilterWhere(['like', 'postcode_letter', $this->postcode_letter])
            ->andFilterWhere(['like', 'district_letter', $this->district_letter])
            ->andFilterWhere(['like', 'state_letter', $this->state_letter])
            ->andFilterWhere(['like', 'leader_name', $this->leader_name])
            ->andFilterWhere(['like', 'secretary_name', $this->secretary_name])
            ->andFilterWhere(['like', 'treasury_name', $this->treasury_name])
            ->andFilterWhere(['like', 'docs_completed', $this->docs_completed])
            ->andFilterWhere(['like', 'total_member', $this->total_member])
            ->andFilterWhere(['like', 'entrance_fee', $this->entrance_fee])
            ->andFilterWhere(['like', 'member_fee', $this->member_fee])
            ->andFilterWhere(['like', 'founded_dt', $this->founded_dt])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'updated_by', $this->updated_by]);

        return $dataProvider;
    }
}
