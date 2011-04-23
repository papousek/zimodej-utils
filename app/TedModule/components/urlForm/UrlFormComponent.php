<?php

class UrlFormComponent extends BaseComponent
{

	public function formSubmitted(NForm $form) {
		$values = $form->getValues();
		$this->getPresenter()->redirect('Default:subtitles', $values['url']);
	}

	public function createComponentForm($name) {
		$form = new NAppForm($this, $name);

		$form->addText("url", "Address of TED video")
				->addRule(NForm::URL, "The URL has wrong format.");

		$form->onSubmit[] = array($this, 'formSubmitted');

		$form->addSubmit('continue', 'Continue');
	}

}

