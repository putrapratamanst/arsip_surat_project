<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Dokumen;

/**
 * DokumenSearch represents the model behind the search form about `frontend\models\Dokumen`.
 */
class DokumenSearch extends Dokumen
{
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nama_dokumen','tahun','letak'], 'safe'],
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
        $query = Dokumen::find();

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
             'nama_dokumen' => $this->nama_dokumen,
            'tahun' => $this->tahun,
        ]);

        // $query->andFilterWhere(['like', 'letak', $this->letak])
        //       ->andFilterWhere(['like', 'tahun', $this->tahun])
        //       ->andFilterWhere(['like', 'letak', $this->globalSearch]);

        return $dataProvider;
    }
}
