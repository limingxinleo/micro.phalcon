<?php

namespace MyApp\Controllers\Test;

use MyApp\Controllers\ControllerBase;
use MyApp\Models\User;

class IndexController extends ControllerBase
{

    public function index()
    {
        $users = User::find();
        foreach ($users as $user) {
            dump($user->name);
            foreach ($user->book as $book) {
                dump($book->name);
            }
        }
    }

    public function api()
    {
        $users = User::find();
        return self::success($users);
    }

}

