<?php

namespace backend\assets;

use yii\web\AssetBundle;

use function PHPSTORM_META\type;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "sb_admin/css/styles.css",
        "https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css",
    ];
    public $js = [
        'sb_admin/js/jquery-3.4.1.min.js',
        'sb_admin/js/bootstrap.bundle.min.js',
        'sb_admin/js/scripts.js',
        "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js",
        "sb_admin/assets/demo/chart-area-demo.js",
        "sb_admin/assets/demo/chart-bar-demo.js",
        "https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js",
        "https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js",
        "sb_admin/assets/demo/datatables-demo.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
