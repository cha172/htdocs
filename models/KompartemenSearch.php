<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kompartemen;
use Yii;

/**
 * KompartemenSearch represents the model behind the search form of `app\models\Kompartemen`.
 */
class KompartemenSearch extends Kompartemen
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kompartemen', 'id_identitas'], 'integer'],
            [['t1', 't2','t3','t4', 'T', 'D', 'P', 'Q', 'S', 'R', 'L'], 'number'],
            [['jenis'], 'safe'],
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
        $query = Kompartemen::find();

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
            'id_kompartemen' => $this->id_kompartemen,
            't1' => $this->t1,
            't2' => $this->t2,
            't3' => $this->t3,
            't4' => $this->t4,
            'T' => $this->T,
            'D' => $this->D,
            'P' => $this->P,
            'Q' => $this->Q,
            'S' => $this->S,
            'R' => $this->R,
            'L' => $this->L,
     
            'id_identitas' => Yii::$app->request->get('idk'),
        ]);

        $query->andFilterWhere(['like', 'jenis', $this->jenis]);

        return $dataProvider;
    }
}
