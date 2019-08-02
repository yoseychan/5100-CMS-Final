<?php
namespace Cms\Controllers;

use Cms\Core\App;

class AdminUsersController {
    public function index()
    {
        $users =  App::get('db')->fetchAll("users");
        return view('admin-users', compact('users'));
    }

    public function find()
    {
        $user =  App::get('db')->fetchOne("users", $_POST);

        echo json_encode($user[0]);
    }

    public function store()
    {
        App::get('db')->insert("users", $_POST);

        echo json_encode([
            'result' => 'success'
        ]);
    }

    public function update()
    {
        App::get('db')->update("users", $_POST);
        echo json_encode([
            'result' => 'success'
        ]);
    }

    public function delete()
    {
        App::get('db')->delete("users", $_GET);
        return redirect('/admin/users');
    }
}
