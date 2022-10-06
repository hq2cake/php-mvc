<?php
	use \Core\Route;
	
	return [
        new Route('/test/:var1/:var2/', 'page', 'act'),
        new Route('/sum/:var1/:var2/:var3/', 'num', 'sum'),
        new Route('/page/:id/', 'page', 'show'),
        new Route('/product/:id/', 'product', 'show'),
        new Route('/product/:id/:key/', 'product', 'info'),
        new Route('/product/all', 'product', 'all'),
        new Route('/product/first/:n', 'product', 'first'),
        new Route('/page/act', 'page', 'act'),
        new Route('/product/:n/', 'product', 'show'),
        new Route('/product/all', 'product', 'all'),
	];