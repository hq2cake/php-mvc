<?php
	use \Core\Route;
	
	return [
        new Route('/test/:var1/:var2/', 'page', 'act'),
        new Route('/sum/:var1/:var2/:var3/', 'num', 'sum'),
        new Route('/page/:id/', 'page', 'show'),
        new Route('/user/:id/', 'user', 'show'),
        new Route('/user/:id/:key/', 'user', 'info'),
        new Route('/user/all', 'user', 'all'),
        new Route('/user/first/:n', 'user', 'first'),
        new Route('/page/act', 'page', 'act'),
	];