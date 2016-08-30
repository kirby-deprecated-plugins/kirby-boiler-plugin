<?php
// https://getkirby.com/docs/developer-guide/objects/page

page::$methods['linktag'] = function($page) {
	return '<a href="' . $page->url() . '">' . $page->title()->html() . '</a>';
};