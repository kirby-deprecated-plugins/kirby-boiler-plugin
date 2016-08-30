<?php
// https://getkirby.com/docs/developer-guide/objects/pages

pages::$methods['listAll'] = function($pages) {
	foreach($pages as $page) {
		echo '- ' . $page->title() . '<br>';
	}
};