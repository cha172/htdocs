<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "history".
 *
 * @property int $id_history
 * @property string $user_name
 * @property string $aktifitas
 */
class History extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_name', 'aktifitas'], 'required'],
            [['aktifitas'], 'string'],
            [['user_name'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_history' => 'Id History',
            'user_name' => 'User Name',
            'aktifitas' => 'Aktifitas',
        ];
    }
}
