<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace xutl\fileupload;

use yii\web\AssetBundle;

/**
 * Class FileUploadAsset
 * @package xutl\fileupload
 */
class FileUploadAsset extends AssetBundle
{
    public $sourcePath = '@bower/blueimp-file-upload';

    public $css = [
        'css/jquery.fileupload.css'
    ];

    public $js = [
        'js/vendor/jquery.ui.widget.js',
        'js/jquery.iframe-transport.js',
        'js/jquery.fileupload.js',
        'js/jquery.fileupload-process.js',
        'js/jquery.fileupload-image.js',
        'js/jquery.fileupload-validate.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'xutl\fileupload\LoadImageAsset'
    ];
}