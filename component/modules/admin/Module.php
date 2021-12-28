<?php
namespace app\modules\admin;

use Yii;
use yii\filters\AccessControl;

/**
 * daftar module definition class
 */
class Module extends \yii\base\Module
{

    /**
     *
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     *
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [

                    [
                        'allow' => true,
                        'matchCallback' => function () {
                            if (Yii::$app->user->isGuest) {
                                return (false);
                            }

                            if (! Yii::$app->session->get('suser')) {
                                Yii::$app->user->logout();
                                return (false);
                            }
                            return (Yii::$app->user->identity->role == 'admin');
                        }
                    ]
                ]
            ]
        ];
    }

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
