<?php
namespace Cms\Controllers;

use Cms\Core\App;

class UserPostsController {
    public function index()
    {
        $posts =  App::get('db')->fetchAll("posts");
        return view('user-posts', compact('posts'));
    }

    public function store()
    {
        App::get('db')->insert("posts", $_POST);

        echo json_encode([
            'result' => 'success'
        ]);
    }

    public function delete()
    {
        App::get('db')->delete("posts", $_GET);
        return redirect('/user/posts');
    }
}


