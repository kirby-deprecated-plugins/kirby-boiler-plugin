<?php
kirby()->hook(['panel.page.create', 'panel.page.update'], function($page) {
	// Do something
});

// Kirby 2.4
/*
kirby()->hook('panel.page.*', function($page, $oldPage = null) {
	var_dump($this->type()); // panel.page.update
});
*/