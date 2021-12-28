<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kepala_upt".
 *
 * @property string $nip_kepala_upt
 * @property string $nama
 */
class KepalaUpt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kepala_upt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip_kepala_upt', 'nama'], 'required'],
            [['nip_kepala_upt'], 'string', 'max' => 30],
            [['nama'], 'string', 'max' => 30],
            [['nip_kepala_upt'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nip_kepala_upt' => 'Nip Kepala Upt',
            'nama' => 'Nama',
        ];
    }
}
