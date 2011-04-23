<?php
class General_DefaultPresenter extends General_BasePresenter
{

	public function renderDefault() {
		$this->forward(":Ted:Default:default");
	}

}
