<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace xutl\fileupload;

use yii\web\AssetBundle;

class AttachmentUploadAsset extends AssetBundle
{

    public $sourcePath = '@vendor/xutl/yii2-fileupload-widget/assets';

    public $css = [
        'css/attachment-upload.css'
    ];

    public $js = [
        'js/attachment-upload.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'xutl\fileupload\FileUploadAsset'
    ];
}
