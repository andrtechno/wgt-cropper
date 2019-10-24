<?php

namespace panix\ext\cropper;

use yii\web\AssetBundle;

class CropperLibAsset extends AssetBundle
{
    public $sourcePath = '@bower/cropper/dist';

    public $css = [
        'cropper.min.css'
    ];
    public $js = [
        'cropper.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
    ];
}
