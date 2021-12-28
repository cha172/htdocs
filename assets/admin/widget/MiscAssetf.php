<?php


namespace app\assets\admin\widget;

use yii\web\AssetBundle;

/**
 * @author Djava UI <support@djavaui.com>
 */
class MiscAssetf extends AssetBundle {
    
    public $basePath = '@webroot';
    public $baseUrl = '@asset';
    public $css = [
        'admin/css/reset.css',
        'admin/css/layout.css',
        'admin/css/components.css',
        'admin/css/plugins.css',
        'admin/css/yii-custom.css',
        'admin/css/themes/default.theme.css',
        'admin/css/custom.css'
    ];
    public $js = [
        'admin/js/apps.js',
        'admin/js/demo.js',
    ];
    public $depends = [
        'app\assets\admin\CoreAssetf',
        'app\assets\admin\widget\PageLevelMiscAsset',
    ];
    
}
