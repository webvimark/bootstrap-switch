<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 6/18/14
 * Time: 10:38 AM
 */

namespace app\webvimark\extensions\BootstrapSwitch;


use yii\base\Widget;
use yii\helpers\Json;

class BootstrapSwitch extends Widget
{
	public $target = '.b-switch';

	public $pluginOptions = [];

	public function run()
	{
		BootstrapSwitchAsset::register($this->view);

		$options = Json::encode($this->pluginOptions);
		$js = <<<JS
		$('$this->target').bootstrapSwitch();
JS;

		$this->view->registerJs($js);
	}
} 