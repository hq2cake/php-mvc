<?php

namespace Project\Controllers;
use \Core\Controller;

class PageController extends Controller
{
    public function act()
    {
        return $this->render('page/act', [
            'name' => 'Array',
            'users' => ['user1', 'user2', 'user3']
        ]);
    }
}