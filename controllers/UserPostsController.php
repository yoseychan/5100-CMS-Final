<?php
namespace Cms\Controllers;

use Cms\Core\App;

class UserPostsController {
    public function index()
    {
        $user =  App::get('db')->fetchOne("users", $_GET)[0];
        $posts =  App::get('db')->fetchAll("posts");
        return view('user-posts', compact('user','posts'));
    }

    public function store()
    {
        App::get('db')->insert("posts", $_POST);

        echo json_encode([
            'result' => 'success'
        ]);
        return redirect('/user/posts');
    }

    public function delete()
    {
        App::get('db')->delete("posts", $_GET);
        return redirect('/user');
    }
}


