<?php

namespace Project\Controllers;
use \Core\Controller;

class ProductController extends Controller
{
    protected $products;

    public function __construct()
    {
        $this->products = [
            1 => [
                'name'     => 'product1',
                'price'    => 100,
                'quantity' => 5,
                'category' => 'category1',
            ],
            2 => [
                'name'     => 'product2',
                'price'    => 200,
                'quantity' => 6,
                'category' => 'category2',
            ],
            3 => [
                'name'     => 'product3',
                'price'    => 300,
                'quantity' => 7,
                'category' => 'category2',
            ],
            4 => [
                'name'     => 'product4',
                'price'    => 400,
                'quantity' => 8,
                'category' => 'category3',
            ],
            5 => [
                'name'     => 'product5',
                'price'    => 500,
                'quantity' => 9,
                'category' => 'category3',
            ],
        ];
    }

    public function show($params)
    {
        $productLength = count($this->products);
        $number = $params['id'];

        if($productLength >= $number && $number >= 0 ) {

            return $this->render('product/show', [
                'product' => $this->products[$number],
            ]);

        } else {
            echo "This number too much";
        }

        return $this->products[$number];
    }

    public function all()
    {
        $this->title = 'Hello';
        return $this->render('product/all', [
            'products' => $this->products,
        ]);
    }
}