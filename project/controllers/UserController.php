<?php

namespace Project\Controllers;

use Core\Controller;

class UserController extends Controller
{
    protected $users;

    public function __construct()
    {
        $this->users = [
            1 => ['name'=>'user1', 'age'=>'23', 'salary' => 1000],
            2 => ['name'=>'user2', 'age'=>'24', 'salary' => 2000],
            3 => ['name'=>'user3', 'age'=>'25', 'salary' => 3000],
            4 => ['name'=>'user4', 'age'=>'26', 'salary' => 4000],
            5 => ['name'=>'user5', 'age'=>'27', 'salary' => 5000],
        ];
    }

    public function show($params)
    {
        $name = $this->users[ $params['id']]['name'];
        $age = $this->users[ $params['id']]['age'];
        $salary = $this->users[ $params['id']]['salary'];

        echo "Name: $name, Age: $age, Salary: $salary";
    }

    public function info($params)
    {
        // здесь выведем страницу с определенным номером
        echo $this->users[ $params['id'] ][$params['key']];
    }

    public function all()
    {
        $this->showUsers($this->users);
    }

    public function first($params)
    {
        $users = $this->users;
        $usersCount = count($users);
        $number = $params['n'];

        if ($usersCount >= $number) {
            $users = array_slice($users, 0, $number);
            $this->showUsers($users);
        } else {
            $this->all();
        }
    }

    private function showUsers($users)
    {
        foreach ($users as $user) {
            foreach ($user as $key => $item) {
                echo " $key: $item ";
            }
            echo "<br>";
        }
    }
}