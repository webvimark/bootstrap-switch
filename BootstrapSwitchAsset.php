<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 6/18/14
 * Time: 10:45 AM
 */

namespace app\webvimark\extensions\BootstrapSwitch;


use yii\web\AssetBundle;
use yii\web\View;

class BootstrapSwitchAsset extends AssetBundle
{
	public function init()
	{
		$this->sourcePath = __DIR__ . '/assets';
		$this->css = ['css/bootstrap-switch.min.css'];
		$this->js = ['js/bootstrap-switch.min.js'];

		parent::init();
	}
}