<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hasil".
 *
 * @property int $id_hasil
 * @property float $t2
 * @property float $t4
 */
class Hasil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hasil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['t2', 't4'], 'required'],
            [['t2', 't4'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_hasil' => 'Id Hasil',
            't2' => 'T2',
            't4' => 'T4',
        ];
    }
}
