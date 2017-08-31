<?php

namespace panix\ext\cropper;

use yii\base\Model;

class CropperForm extends Model {

    public $scaleX;
    public $scaleY;
    public $rotate;
    public $width;
    public $height;
    public $coord_x;
    public $coord_y;

    public function rules() {
        return [
            [['scaleX', 'scaleY','rotate','width','height','coord_y','coord_x'], 'string'],
        ];
    }

}
