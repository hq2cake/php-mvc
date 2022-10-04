<?php

namespace Project\Controllers;
use \Core\Controller;

class PageController extends Controller
{
    private $pages;

    public function __construct()
    {
        $this->pages = [
            1 => 'страница 1',
            2 => 'страница 2',
            3 => 'страница 3',
        ];
    }

    public function show($params)
    {
        // здесь выведем страницу с определенным номером
        var_dump($params);
        echo $this->pages[ $params['id'] ];
    }
}