<?php
// https://getkirby.com/docs/developer-guide/kirbytext/tags

kirbytext::$tags['wikipedia'] = array(
	'attr' => array(
		'text'
	),
	'html' => function($tag) {
		return '<a href="http://wikipedia.org/wiki/' . $tag->attr('wikipedia') . '">' . $tag->attr('text', 'Wikipedia') . '</a>';
	}
);