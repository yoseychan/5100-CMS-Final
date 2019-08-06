<?php
namespace Cms\Controllers;

use Cms\Core\App;

class AdminPostsController {
    public function index()
    {
        $posts =  App::get('db')->fetchAll("posts");
        $users =  App::get('db')->fetchAll("users");
        return view('admin-posts', compact('posts', 'users'));
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
        return redirect('/admin/posts');
    }

    public function update()
    {
        App::get('db')->update("posts", $_POST);
        echo json_encode([
            'result' => 'success'
        ]);
        return redirect('/admin/posts');
    }

    public function edit()
    {
        $post =  App::get('db')->fetchOne("posts", $_GET)[0];
        return view('admin-posts-edit', compact('post'));
    }

    public function delete()
    {
        App::get('db')->delete("posts", $_GET);
        return redirect('/admin/posts');
    }
}

