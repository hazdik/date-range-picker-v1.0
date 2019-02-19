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
 * Moment Asset bundle for \hazdik\daterange\DateRangePicker.
 * @since 1.0
 */
class MomentAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $jsOptions = ['position' => View::POS_HEAD];
    /**
     * @inheritdoc
     */
    public $depends = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('js', ['js/moment']);
        parent::init();
    }
}
