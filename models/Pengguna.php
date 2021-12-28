<?php

namespace app\models;
use Yii;
use Codeception\Lib\Generator\Shared\Classname;
use yii\helpers\ArrayHelper;


class Pengguna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public static function tableName()
    {
        return 'pengguna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at', 'id_pd', 'nm_pd'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'verification_token', 'uuid'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['nm_pd'], 'string', 'max' => 60],
            [['role'], 'string', 'max' => 25],
            [['kd_pt'], 'string', 'max' => 20],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }
    
    
    

    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }
    


    public function Userlevel()
    {
        $arr=[];
        $arr['admin']='Admin';
        $arr['operator']='Operator';
        return $arr;
    }

    public function attributeLabels()
    {
        return [
    
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status Login',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'verification_token' => 'Verification Token',
            'nm_pd' => 'Nama',
            'role' => 'Role',
        ];
    }
}
