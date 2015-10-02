<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/creative.css',
        'css/bootstrap.min.css',
        'css/bootstrap.css',
        'css/animate.min.css',
    ];
    public $js = [
        'bootstrap.js',
        'bootstrap.min.js',
        'cbpAnimatedHeader.js',
        'classie.js',
        'jquery.easing.min.js',
        'jquery.fittext.js',
        'jquery.js',
        'wow.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
