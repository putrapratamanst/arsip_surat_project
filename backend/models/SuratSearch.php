<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Surat;

/**
 * SuratSearch represents the model behind the search form about `backend\models\Surat`.
 */
class SuratSearch extends Surat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['tempat','no_surat','tujuan', 'isi', 'tanggal', 'npm', 'status', 'perihal', 'nama'], 'safe'],
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
        $query = Surat::find();

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
            'tanggal' => $this->tanggal,
        ]);

        $query->andFilterWhere(['like', 'tempat', $this->tempat])
            ->andFilterWhere(['like', 'tujuan', $this->tujuan])
            ->andFilterWhere(['like', 'isi', $this->isi])
            ->andFilterWhere(['like', 'npm', $this->npm])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'perihal', $this->perihal])
            ->andFilterWhere(['like', 'nama', $this->nama]);

        return $dataProvider;
    }
}
