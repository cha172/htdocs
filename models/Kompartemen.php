<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kompartemen".
 *
 * @property int $id_kompartemen
 * @property float $t1
 * @property float $t3
 * @property float $T
 * @property float $D
 * @property float $P
 * @property float $Q
 * @property float $S
 * @property float $R
 * @property float $L
 * @property string $jenis
 * @property int $id_hasil
 * @property int $id_identitas
 */
class Kompartemen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kompartemen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['t1', 't2','t3','t4', 'T', 'D', 'P', 'Q', 'S', 'R', 'L', 'jenis', 'id_identitas'], 'required'],
            [['t1', 't3', 'T', 'D', 'P', 'Q', 'S', 'R', 'L'], 'number'],
            [['id_identitas'], 'integer'],
            [['jenis'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kompartemen' => 'Id Kompartemen',
            't1' => 'T1',
            't2' => 'T2',
            't3' => 'T3',
            't4' => 'T4',
            'T' => 'T',
            'D' => 'D',
            'P' => 'P',
            'Q' => 'Q',
            'S' => 'S',
            'R' => 'R',
            'L' => 'L',
            'jenis' => 'Jenis',
            'id_identitas' => 'Id Identitas',
        ];
    }
}
