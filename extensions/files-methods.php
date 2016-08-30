<?php
// https://getkirby.com/docs/developer-guide/objects/files

files::$methods['listAll'] = function($files) {
	foreach($files as $file) {
		echo '- ' . $file->filename() . '<br>';
	}
};