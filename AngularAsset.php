<?php

namespace tnoi\angularjs;

use yii\web\AssetBundle;
/**
 * This is just an example.
 */
class AngularAsset extends AssetBundle
{
    public $sourcePath = '@bower/angular';
    public $js = [
        'angular.min.js',
    ];
}
