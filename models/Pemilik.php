<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pemilik".
 *
 * @property int $id_pemilik
 * @property string $nama
 */
class Pemilik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemilik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pemilik' => 'Id Pemilik',
            'nama' => 'Nama',
        ];
    }
}
