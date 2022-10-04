<?php

namespace Project\Controllers;
use \CORE\Controller;

class NumController extends Controller
{
    public function sum($params)
    {
        $sum = 0;
        foreach ($params as $param) {
            $sum += $param;
        }

        echo 'sum of numbers: ' . $sum;
    }
}