<?php
namespace crazycoder\kindeditor;

use yii\web\AssetBundle;
class LightAsset extends AssetBundle
{
    public $sourcePath = '@vendor/crazycoder/yii2-kindeditor';
    public $css = [
        'kindeditor/themes/default/default.css',
        'kindeditor/plugins/code/prettify.css',
    ];
    public $js = [
        'kindeditor/plugins/code/prettify.js',
        'kindeditor/plugins/code/light.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
