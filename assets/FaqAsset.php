<?php

namespace jcabanillas\faq\assets;

use yii\web\AssetBundle;

/**
 * Class FaqAsset
 * @package jcabanillas\faq\assets
 */
class FaqAsset extends AssetBundle
{
    public $sourcePath = '@jcabanillas/faq/resources';
    public $css = [
        'faq.css',
    ];
    public $js = [

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
