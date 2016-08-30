<?php
// https://getkirby.com/docs/developer-guide/advanced/routing
// https://getkirby.com/docs/developer-guide/toolkit/routing

kirby()->routes(array( 
	array(
		'pattern' => 'my/pattern/(:any)',
		'action' => function ($uid) {
			return site()->visit('about', 'de');
		}
	)
));