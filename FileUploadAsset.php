<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace xutl\fileupload;

use yii\web\AssetBundle;

class FileUploadAsset extends AssetBundle
{
    public $sourcePath = '@vendor/xutl/fileupload/assets';

    public $css = [
        'css/jquery.fileupload.css',
        'css/jquery.fileupload-ui.css'
    ];

    public $js = [
        'js/jquery.iframe-transport.js',
        'js/jquery.fileupload.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\jui\JuiAsset'
    ];
}