<?php

namespace panix\ext\cropper;

use yii\web\AssetBundle;

class CropperAsset extends AssetBundle
{
    public $sourcePath = '@vendor/panix/wgt-cropper/assets';

    public $js = [
        'main.js'
    ];
    public $css = [
        'css/main.css'
    ];
    public $depends = [
        'panix\ext\cropper\CropperLibAsset',
    ];
}
