<?php
namespace Cms\Controllers;

use Cms\Core\App;

class PagesController {

    // public function home()
    // {
    //     $tasks = App::get('db')->fetchAll("tasks");

    //     return view('index', compact('tasks'));
    // }
 //User Page

    public function user()
    {
        return view('user');
    }

//Admin Page
    public function admin()
    {
        return view('admin');
    }


}