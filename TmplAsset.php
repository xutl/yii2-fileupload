<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace xutl\fileupload;

use yii\web\AssetBundle;

/**
 * Class BlueimpTmplAsset
 * @package xutl\fileupload
 */
class TmplAsset extends AssetBundle
{
    public $sourcePath = '@bower/blueimp-tmpl';

    public $js = [
        'js/tmpl.min.js'
    ];
}