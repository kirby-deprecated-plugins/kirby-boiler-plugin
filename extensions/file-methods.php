<?php
// https://getkirby.com/docs/developer-guide/objects/file

file::$methods['soShiny'] = function($file) {
	return 'Everything so shiny: <a href="' . $file->url() . '">' . $file->filename() . '</a>';
};