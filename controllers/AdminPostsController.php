<?php
namespace Cms\Controllers;

use Cms\Core\App;

class AdminPostsController {
    public function index()
    {
        $posts =  App::get('db')->fetchAll("posts");
        return view('admin-posts', compact('posts'));
    }

    public function find()
    {
        $post =  App::get('db')->fetchOne("posts", $_POST);

        echo json_encode($post[0]);
    }

    public function store()
    {
        App::get('db')->insert("posts", $_POST);

        echo json_encode([
            'result' => 'success'
        ]);
    }

    public function update()
    {
        App::get('db')->update("posts", $_POST);
        echo json_encode([
            'result' => 'success'
        ]);
    }

    public function delete()
    {
        App::get('db')->delete("posts", $_GET);
        return redirect('/admin/users');
    }
}

