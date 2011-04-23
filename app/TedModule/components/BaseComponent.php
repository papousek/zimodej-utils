<?php
class BaseComponent extends NControl
{

	public function  __construct(IComponentContainer $parent = NULL, $name = NULL) {
		parent::__construct($parent, $name);
		$this->startUp();
	}

	protected function beforeRender() {}

	protected function startUp() {}

	public function render() {
		$this->beforeRender();
		return $this->getTemplate()->render();
	}

	protected function createTemplate() {
		$template = parent::createTemplate();
		$name = strtr($this->getReflection()->getName(), array("Component" => ""));
		$componentName = substr_replace($name, strtolower(substr($name, 0, 1)), 0, 1);

		$template->setFile(dirname(__FILE__) . '/' . $componentName . '/' . $componentName . ".latte");
		
		return $template;
	}

}