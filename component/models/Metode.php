<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "metode".
 *
 * @property int $id_metode
 * @property string $metode
 */
class Metode extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'metode';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['metode'], 'required'],
            [['metode'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_metode' => 'Id Metode',
            'metode' => 'Metode',
        ];
    }
}
