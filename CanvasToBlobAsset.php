<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace xutl\fileupload;

use yii\web\AssetBundle;

/**
 * Class CanvasToBlobAsset
 * @package xutl\fileupload
 */
class CanvasToBlobAsset extends AssetBundle
{
    public $sourcePath = '@bower/blueimp-canvas-to-blob';

    public $js = [
        'js/canvas-to-blob.min.js'
    ];
}
