<?php
namespace Cms\Controllers;

use Cms\Core\App;

class PagesController {

     public function home()
     {
         return view('index');
     }

    //User Page
    public function user()
    {
        $posts = App::get('db')->fetchAll("posts");
        $users = App::get('db')->fetchAll("users");
        return view('user', compact('posts', 'users'));
    }

    //Admin Page
    public function admin()
    {
        $posts = App::get('db')->fetchAll("posts");
        $users = App::get('db')->fetchAll("users");
        return view('admin', compact('posts','users'));

    }
    //authentication

    public function authenticate ()
    {

         $user = App::get('db')->authenticate('users', $_POST) ;
         $_SESSION['user'] = $user;
         return redirect('/user');
    }

    //Admin page for adding a new user

    public function newuser()
    {

        return view('admin-users-newuser');

    }

    //creating new posts
    public function newpost()
    {
        $user =  App::get('db')->fetchOne("users", $_GET)[0];
        return view('user-posts-newpost', compact('user'));

    }

}