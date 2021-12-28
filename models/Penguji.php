<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penguji".
 *
 * @property string $nip_penguji
 * @property string $nama
 */
class Penguji extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penguji';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip_penguji', 'nama'], 'required'],
            [['nip_penguji'], 'string', 'max' => 30],
            [['nama'], 'string', 'max' => 30],
            [['nip_penguji'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nip_penguji' => 'Nip Penguji',
            'nama' => 'Nama',
        ];
    }
}
