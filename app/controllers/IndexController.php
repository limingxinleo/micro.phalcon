<?php

class IndexController extends \Phalcon\Mvc\Controller
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

}

