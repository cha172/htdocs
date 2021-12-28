<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pemeriksa".
 *
 * @property string $nip_pemeriksa
 * @property string $nama
 */
class Pemeriksa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemeriksa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip_pemeriksa', 'nama'], 'required'],
            [['nip_pemeriksa'], 'string', 'max' => 30],
            [['nama'], 'string', 'max' => 30],
            [['nip_pemeriksa'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nip_pemeriksa' => 'Nip Pemeriksa',
            'nama' => 'Nama',
        ];
    }
}
