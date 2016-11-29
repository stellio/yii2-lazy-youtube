Yii2 Lazy YouTube Loader
===================
Accelerates the loading of pages with youtube videos using lazy load.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist ilis/yii2-lazy-youtube "*"
```

or add

```
"ilis/yii2-lazy-youtube": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \ilis\lazyyt\LazyYT::widget([
    'url' => 'https://www.youtube.com/watch?v=S5S9LIT-hdc'
]); ?>
```

or by short link to :


```php
<?= \ilis\lazyyt\LazyYT::widget([
    'url' => 'https://youtu.be/S5S9LIT-hdc'
]); ?>
```
