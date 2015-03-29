<?php

namespace tnoi\angularjs;

use yii\web\AssetBundle;
/**
 * This is just an example.
 */
class AngularAsset extends AssetBundle
{
    public $sourcePath = '@vendor/tnoi/yii2-angularjs';
    public $js = [
        'angular.min.js',
    ];
}
