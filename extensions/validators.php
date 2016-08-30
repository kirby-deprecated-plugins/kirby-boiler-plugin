<?php
// https://getkirby.com/docs/developer-guide/objects/validators

v::$validators['invoiceNum'] = function($value) {
	return v::match($value, '/[0-9]{4}-[A-Z]{4}[0-9]{2}/');
};