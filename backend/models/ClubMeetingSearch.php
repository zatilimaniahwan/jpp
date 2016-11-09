<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ClubMeeting;

/**
 * ClubMeetingSearch represents the model behind the search form about `app\models\ClubMeeting`.
 */
class ClubMeetingSearch extends ClubMeeting
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'meeting_id', 'club_ref'], 'integer'],
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
        $query = ClubMeeting::find();

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
            'meeting_id' => $this->meeting_id,
            'club_ref' => $this->club_ref,
        ]);

        return $dataProvider;
    }
}
