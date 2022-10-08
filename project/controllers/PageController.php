<?php

namespace Project\Controllers;
use \Core\Controller;
use \Project\Models\Page; // подключаем нашу модель

class PageController extends Controller
{
    protected $pages;

    public function __construct()
    {
        $this->pages = [
            1 => ['title'=>'страница 1', 'text'=>'текст страницы 1'],
            2 => ['title'=>'страница 2', 'text'=>'текст страницы 2'],
            3 => ['title'=>'страница 3', 'text'=>'текст страницы 3'],
        ];
    }

    public function act()
    {
        return $this->render('page/act', [
            'name' => 'Array',
            'users' => ['user1', 'user2', 'user3']
        ]);
    }

    public function show($params)
    {
        $pageId = $params['id'];

        $this->title = $this->pages[$pageId]['title'];

        return $this->render('page/show', [
            'text' => $this->pages[$pageId]['text'],
        ]);
    }
}