<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;


class Identitas extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'identitas';
    }

    /**
     * {@inheritdoc}
     */
    public $nm_pemilik;
    public function rules()
    {
        return [
            [['uttp', 'merk_buatan', 'model', 'volume_nominal', 'jml_kompartemen', 'merk_kendaraan', 'no_polis', 'tgl_pemeriksaan', 'id_pemilik', 'id_metode', 'nip_pemeriksa', 'nip_penguji', 'nip_kepala', 'tahun', 'surat', 'lob_jarum', 'lob_kawat_indeks', 'lob_kawat_manhole', 'benda_tum','suhu_dasar'], 'required'],
            [['volume_nominal', 'jml_kompartemen', 'id_pemilik', 'id_metode', 'tahun', 'surat', 'lob_jarum', 'lob_kawat_indeks', 'lob_kawat_manhole', 'benda_tum','lob_kawat_chasis','suhu_dasar','diajukan','edit','hapus'], 'integer'],
            [['tgl_pemeriksaan','tgl_sertifikat'], 'safe'],
            [['uttp'], 'string', 'max' => 5],
            [['nama_file'], 'string', 'max' => 30],
            [['merk_buatan', 'model', 'merk_kendaraan', 'no_polis'], 'string', 'max' => 15],
            [['nip_pemeriksa', 'nip_penguji', 'nip_kepala','nm_pemilik'], 'string', 'max' => 30],
        ];
    }

    public function getPemilik()
    {
        return $this->hasOne(Pemilik::className(), ['id_pemilik'=>'id_pemilik']);
    }
    public function getMetode()
    {
        return $this->hasOne(Metode::className(), ['id_metode'=>'id_metode']);
    }
    public function getPemeriksa()
    {
        return $this->hasOne(Pemeriksa::className(), ['nip_pemeriksa'=>'nip_pemeriksa']);
    }
    public function getPenguji()
    {
        return $this->hasOne(Penguji::className(), ['nip_penguji'=>'nip_penguji']);
    }
    public function getKepala()
    {
         return KepalaUpt::find()->one();;
    }
    public function ListPemilik()
    {
        return ArrayHelper::map(Pemilik::find()->all(), 'id_pemilik', 'nama');
    }
    public function ListMetode()
    {
        return ArrayHelper::map(Metode::find()->all(), 'id_metode', 'metode');
    }
    public function ListPemeriksa()
    {
        return ArrayHelper::map(Pemeriksa::find()->all(), 'nip_pemeriksa', 'nama');
    }
    public function ListPenguji()
    {
        return ArrayHelper::map(Penguji::find()->all(), 'nip_penguji', 'nama');
    }
    public function ListKepala()
    {
        return ArrayHelper::map(KepalaUpt::find()->all(), 'nip_kepala_upt', 'nama');
    }
    public function attributeLabels()
    {
        return [
            'id_identitas' => 'Id Identitas',
            'uttp' => 'Uttp',
            'merk_buatan' => 'Merk Buatan',
            'model' => 'Model',
            'volume_nominal' => 'Volume Nominal',
            'jml_kompartemen' => 'Jml Kompartemen',
            'merk_kendaraan' => 'Merk Kendaraan',
            'no_polis' => 'No Polis',
            'tgl_pemeriksaan' => 'Tgl Pemeriksaan',
            'id_pemilik' => 'Pemilik',
            'id_metode' => 'Metode',
            'nip_pemeriksa' => 'Nip Pemeriksa',
            'nip_penguji' => 'Nip Penguji',
            'nip_kepala' => 'Nip Kepala',
            'tahun' => 'Tahun Surat',
            'surat' => 'Surat',
            'lob_jarum' => 'Lobang Jarum Indeks',
            'lob_kawat_indeks' => 'Lobang Kawat Indeks',
            'lob_kawat_manhole' => 'Lobang Kawat Manhole',
            'lob_kawat_chasis'=> 'Lobang Kawat Chasis',
            'benda_tum' => 'Beda Tum',
        ];
    }
}
