<?php
//https://getkirby.com/docs/developer-guide/advanced/controllers

return function($site, $pages, $page) {
	return array(
		'foo' => 'my first template variable',
		'bar' => 'my second template variable'
	);
};