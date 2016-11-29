<?php

namespace ilis\lazyyt;

class LazyYTAsset extends \yii\web\AssetBundle
{
    public $sourcePath = __DIR__ . '/web';

    public $depends =
    [
        'yii\web\JqueryAsset',
    ];

    public $jsOptions =
    [
        'position' => \yii\web\View::POS_END,
    ];

    public function __construct($config = [])
    {
            $this->js[] = 'js/lazy-yt.js';
            $this->js[] = 'js/lazy-yt-init.js';

            $this->css[] = 'css/lazyYT.css';

        parent::__construct($config);
    }
}
