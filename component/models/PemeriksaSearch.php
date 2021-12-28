<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\pemeriksa;

/**
 * PemeriksaSearch represents the model behind the search form of `app\models\pemeriksa`.
 */
class PemeriksaSearch extends pemeriksa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip_pemeriksa', 'nama'], 'safe'],
        ];
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
    public function search($params)
    {
        $query = pemeriksa::find();

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
        $query->andFilterWhere(['like', 'nip_pemeriksa', $this->nip_pemeriksa])
            ->andFilterWhere(['like', 'nama', $this->nama]);

        return $dataProvider;
    }
}
