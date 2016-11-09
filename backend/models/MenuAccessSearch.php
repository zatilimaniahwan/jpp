<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MenuAccess;

/**
 * MenuAccessSearch represents the model behind the search form about `app\models\MenuAccess`.
 */
class MenuAccessSearch extends MenuAccess
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'menu_id', 'role_i'], 'integer'],
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
        $query = MenuAccess::find();

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
            'role_i' => $this->role_i,
        ]);

        return $dataProvider;
    }
}
