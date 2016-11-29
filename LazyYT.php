<?php

namespace ilis\lazyyt;

use Yii;
use yii\base\Widget;
use ilis\lazyyt\LazyYTAsset;

class LazyYT extends Widget
{

    // Youtube video url
    public $url;

    public function init() {
        parent::init();
    }

    public function run()
    {
        LazyYTAsset::register($this->view);
        // Asset bundle should be configured with the application key
        // $this->configureAssetBundle();
        // return 'adsf';
        return $this->render(
            'lazy-yt',
            [
                'id' => $this->extractYoutubeVideoId($this->url)
            ]
        );
    }

    private function extractYoutubeVideoId($url) {
        if (preg_match('/youtube\.com\/watch\?v=([^\&\?\/]+)/', $url, $id)) {
            return $id[1];
        } else if (preg_match('/youtube\.com\/embed\/([^\&\?\/]+)/', $url, $id)) {
            return $id[1];
        } else if (preg_match('/youtube\.com\/v\/([^\&\?\/]+)/', $url, $id)) {
            return $id[1];
        } else if (preg_match('/youtu\.be\/([^\&\?\/]+)/', $url, $id)) {
            return $id[1];
        } else if (preg_match('/youtube\.com\/verify_age\?next_url=\/watch%3Fv%3D([^\&\?\/]+)/', $url, $id)) {
            return $id[1];
        } else {
            return "not-found";
        }
    }

    private function configureAssetBundle()
    {
        MapInputAsset::$key = $this->key;
    }
}
