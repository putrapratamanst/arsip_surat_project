<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Posisi;

/**
 * PosisiSearch represents the model behind the search form of `backend\models\Posisi`.
 */
class PosisiSearch extends Posisi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_letak'], 'integer'],
            [['posisi'], 'safe'],
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
        $query = Posisi::find();

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
            'id_letak' => $this->id_letak,
        ]);

        $query->andFilterWhere(['like', 'posisi', $this->posisi]);

        return $dataProvider;
    }
}
