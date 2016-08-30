<?php
// https://getkirby.com/docs/developer-guide/kirbytext/filters

// Before markdown is parsed
kirbytext::$pre[] = function($kirbytext, $value) {
	return $value;
};

// After markdown is parsed
kirbytext::$post[] = function($kirbytext, $value) {
	return $value;
};