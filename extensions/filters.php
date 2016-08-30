<?php
// https://getkirby.com/docs/developer-guide/objects/collections

collection::$filters['boiler'] = function($collection, $field, $value) {
	foreach($collection->data as $key => $item) {    
		unset($collection->$key);
	}
	return $collection;
};