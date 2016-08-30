<?php
// https://getkirby.com/docs/developer-guide/advanced/models

class BoilerPage extends Page {
	public function boiler() {
		return $this->title();
	}
}