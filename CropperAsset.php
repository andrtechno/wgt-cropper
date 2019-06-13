<?php

namespace panix\ext\cropper;

use yii\web\AssetBundle;

class CropperAsset extends AssetBundle
{
    public $sourcePath = '@vendor/panix/wgt-cropper/assets';

    public $css = [
        'cropper.min.css'
    ];
    public $js = [
        'cropper.min.js',
        'main.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
