<?php

/**
 * @Dinakaran Arumairaj
 * @package yii2-date-range
 * @version 1.0.0
 */

namespace hazdik\daterange;

use hazdik\base\AssetBundle;

/**
 * DateRangePicker bundle for \hazdik\daterange\DateRangePicker.
 */
class DateRangePickerAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $depends = [
        'hazdik\daterange\MomentAsset',
        'yii\web\JqueryAsset'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/daterangepicker']);
        $this->setupAssets('js', ['js/daterangepicker']);
        parent::init();
    }
}
