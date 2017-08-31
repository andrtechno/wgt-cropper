<?php


namespace panix\ext\cropper;

use Yii;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\Widget;

class Cropper extends \panix\engine\data\Widget {

    public function run() {

        $this->registerClientScript();
    }


    protected function registerClientScript() {
        $js = [];
        $view = $this->getView();

        CropperAsset::register($view);



        $options = Json::encode([]);

       // $js[] = "tinymce.init($options);";

       // $view->registerJs(implode("\n", $js));
    }

}
