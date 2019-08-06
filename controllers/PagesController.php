<?php
namespace Cms\Controllers;

use Cms\Core\App;

class PagesController {

     public function home()
     {
         $posts = App::get('db')->fetchAll("posts");

         return view('index', compact('posts'));
     }

     //User Page

    public function user()
    {
        return view('user');
    }

//Admin Page
    public function admin()
    {
        $posts = App::get('db')->fetchAll("posts");

        return view('admin', compact('posts'));

    }

    //Admin new user

    public function newuser()
    {

        return view('admin-users-newuser');

    }

}