<?php
// https://getkirby.com/docs/developer-guide/objects/fields

field::$methods['quote'] = function($field) {
	return '“' . $field->value . '”';
};