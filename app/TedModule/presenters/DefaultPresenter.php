<?php
class Ted_DefaultPresenter extends Ted_BasePresenter
{

	public function renderDefault() {
	}

	public function renderSubtitles($url, $lang = NULL) {
		try {
			$params = TedParams::loadParams($url);
			if (empty($lang)) {
				$this->flashMessage('Choose language of subtitles.');
				$this->getTemplate()->languages = $params->getValue(TedParams::LANGUAGES);
				$this->getTemplate()->url = $url;
			}
			else {
				$downloader = new TedDownloader();
				$subtitles = $downloader->getSubtitles($params, $lang);
				header('Content-type: application/pdf');
				header('Content-Disposition: attachment; filename="' . $params->getValue(TedParams::VIDEO_ID) . '_' . $lang . '.srt"');
				header("Content-Type: application/force-download");
				header("Content-Type: application/download");
				header("Content-Type: text/plain");
				echo $subtitles;
				die;

			}
		}
		catch(Exception $e) {
			$this->flashMessage($e->getMessage(), 'error');
			$this->redirect('default');
		}
	}

	public function createComponentUrlForm($name) {
		return new UrlFormComponent($this, $name);
	}

}