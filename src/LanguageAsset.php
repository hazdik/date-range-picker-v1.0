<?php

/**
 * @Dinakaran Arumairaj
 * @package yii2-date-range
 * @version 1.0.0
 */

namespace hazdik\daterange;

use yii\web\View;
use hazdik\base\AssetBundle;

/**
 * Language Asset bundle for \hazdik\daterange\DateRangePicker.
 */
class LanguageAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $jsOptions = ['position' => View::POS_HEAD];
    /**
     * @inheritdoc
     */
    public $depends = ['\hazdik\daterange\MomentAsset'];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        parent::init();
    }
}
