<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Identitas;


class IdentitasSearch extends Identitas
{

    public function rules()
    {
        return [
            [['volume_nominal', 'jml_kompartemen', 'no_polis', 'id_pemilik', 'id_metode', 'tahun', 'surat', 'lob_jarum', 'lob_kawat_indeks', 'lob_kawat_manhole', 'benda_tum', 'suhu_dasar'], 'integer'],
            [['uttp', 'merk_buatan', 'model', 'merk_kendaraan', 'tgl_pemeriksaan', 'nip_pemeriksa', 'nip_penguji', 'nip_kepala','nm_pemilik'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }


    public function search($params)
    {
        $query = Identitas::find()->joinWith('pemilik');

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
            'id_identitas' => $this->id_identitas,
            'volume_nominal' => $this->volume_nominal,
            'jml_kompartemen' => $this->jml_kompartemen,
            'no_polis' => $this->no_polis,
            'suhu_dasar' => $this->suhu_dasar,
            'tgl_pemeriksaan' => $this->tgl_pemeriksaan,
            'identitas.id_pemilik' => $this->id_pemilik,
            'id_metode' => $this->id_metode,
      
        ]);

        $query->andFilterWhere(['like', 'uttp', $this->uttp])
            ->andFilterWhere(['like', 'merk_buatan', $this->merk_buatan])
            ->andFilterWhere(['like', 'model', $this->model])
            ->andFilterWhere(['like', 'merk_kendaraan', $this->merk_kendaraan])
            ->andFilterWhere(['like', 'nip_pemeriksa', $this->nip_pemeriksa])
            ->andFilterWhere(['like', 'nip_penguji', $this->nip_penguji])
            ->andFilterWhere(['like', 'pemilik.nama', $this->nm_pemilik])
            ->andFilterWhere(['like', 'nip_kepala', $this->nip_kepala]);

        return $dataProvider;
    }
    
    public function searchsertifikat($params)
    {
        $query = Identitas::find()->joinWith('pemilik')->orderBy(['tgl_sertifikat'=>SORT_DESC]);
        
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
            'id_identitas' => $this->id_identitas,
            'volume_nominal' => $this->volume_nominal,
            'jml_kompartemen' => $this->jml_kompartemen,
            'no_polis' => $this->no_polis,
            'tgl_pemeriksaan' => $this->tgl_pemeriksaan,
            'identitas.id_pemilik' => $this->id_pemilik,
            'id_metode' => $this->id_metode,
            'sertifikat' => 1,
            
        ]);
        
        $query->andFilterWhere(['like', 'uttp', $this->uttp])
        ->andFilterWhere(['like', 'merk_buatan', $this->merk_buatan])
        ->andFilterWhere(['like', 'model', $this->model])
        ->andFilterWhere(['like', 'merk_kendaraan', $this->merk_kendaraan])
        ->andFilterWhere(['like', 'nip_pemeriksa', $this->nip_pemeriksa])
        ->andFilterWhere(['like', 'nip_penguji', $this->nip_penguji])
        ->andFilterWhere(['like', 'pemilik.nama', $this->nm_pemilik])
        ->andFilterWhere(['like', 'nip_kepala', $this->nip_kepala]);
        
        return $dataProvider;
    }
    
    public function searchunverifikasi($params)
    {
        $query = Identitas::find()->joinWith('pemilik')->orderBy(['tgl_sertifikat'=>SORT_DESC]);
        
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
            'id_identitas' => $this->id_identitas,
            'diajukan'=>'1',
            'volume_nominal' => $this->volume_nominal,
            'jml_kompartemen' => $this->jml_kompartemen,
            'no_polis' => $this->no_polis,
            'tgl_pemeriksaan' => $this->tgl_pemeriksaan,
            'identitas.id_pemilik' => $this->id_pemilik,
            'id_metode' => $this->id_metode,
            'sertifikat' => 0,
            
        ]);
        
        $query->andFilterWhere(['like', 'uttp', $this->uttp])
        ->andFilterWhere(['like', 'merk_buatan', $this->merk_buatan])
        ->andFilterWhere(['like', 'model', $this->model])
        ->andFilterWhere(['like', 'merk_kendaraan', $this->merk_kendaraan])
        ->andFilterWhere(['like', 'nip_pemeriksa', $this->nip_pemeriksa])
        ->andFilterWhere(['like', 'nip_penguji', $this->nip_penguji])
        ->andFilterWhere(['like', 'pemilik.nama', $this->nm_pemilik])
        ->andFilterWhere(['like', 'nip_kepala', $this->nip_kepala]);
        
        return $dataProvider;
    }
    
}
