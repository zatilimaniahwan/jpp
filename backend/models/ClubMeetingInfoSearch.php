<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ClubMeetingInfo;

/**
 * ClubMeetingInfoSearch represents the model behind the search form about `app\models\ClubMeetingInfo`.
 */
class ClubMeetingInfoSearch extends ClubMeetingInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'club_ref', 'total_member'], 'integer'],
            [['meeting_type', 'notice_dt', 'event_dt', 'notice_days', 'corum', 'agenda', 'created_by', 'created_dt', 'updated_by', 'updated_dt'], 'safe'],
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
        $query = ClubMeetingInfo::find();

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
            'total_member' => $this->total_member,
            'created_dt' => $this->created_dt,
            'updated_dt' => $this->updated_dt,
        ]);

        $query->andFilterWhere(['like', 'meeting_type', $this->meeting_type])
            ->andFilterWhere(['like', 'notice_dt', $this->notice_dt])
            ->andFilterWhere(['like', 'event_dt', $this->event_dt])
            ->andFilterWhere(['like', 'notice_days', $this->notice_days])
            ->andFilterWhere(['like', 'corum', $this->corum])
            ->andFilterWhere(['like', 'agenda', $this->agenda])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'updated_by', $this->updated_by]);

        return $dataProvider;
    }
}
