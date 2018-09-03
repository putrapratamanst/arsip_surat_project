<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
         'css/signin.css',
         'css/bootstrap.min.css',
        // 'css/demo.css',
        // 'css/material-dashboard.css',
        ///'css/site.css',


    ];
    public $js = [
        // 'js/bootsrap.min.js',
        // 'js/Chart.js',
        // 'js/clndr.js',
        // 'js/custom.js',
        // 'js/data.js',
        // 'js/gmaps.js',
        // 'js/jquery.calendario.js',
        // 'js/jquery.flot.js',
        // 'js/jquery.flot.pie.js',
        // 'js/jquery.flot.selection.js',
        // 'js/jquery.flot.stack.js',
        // 'js/jquery.metisMenu.js',
        // 'js/jquery.min.js',
        // 'js/jquery.ninescroll.js',
        // 'js/jquery.slimscroll.min.js',
        // 'js/jquery.swipebox.min.js',
        // 'js/jquery.moment-2.2.1.js',
        // 'js/moment-2.2.1.js',
        // 'js/owl.carousel.js',
        // 'js/pie-chart.js',
        // 'js/screenfull.js',
        // 'js/scripts.js',
        // 'js/site.js',
        // 'js/skycons.js',
        // 'js/underscore-min.js',

    ];
    public $depends = [
       'yii\web\YiiAsset',
         'yii\bootstrap\BootstrapAsset',
    ];
}
