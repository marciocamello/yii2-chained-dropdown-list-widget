<?php
/**
 * @link https://github.com/himiklab/yii2-chained-dropdown-list-widget
 * @copyright Copyright (c) 2014 HimikLab
 * @license http://opensource.org/licenses/MIT
 */

namespace himiklab\chained;

use yii\web\AssetBundle;

class ChainedDropDownListAsset extends AssetBundle
{
    public $sourcePath = '@vendor/himiklab/yii2-chained-dropdown-list-widget/assets';

    public $depends = [
        'yii\web\JqueryAsset'
    ];

    public function init()
    {
        parent::init();

        $this->js[] = YII_DEBUG ? 'js/jquery.chained.remote.js' : 'js/jquery.chained.remote.min.js';
    }
}
