<?php
namespace Cms\Controllers;

use Cms\Core\App;

class UserProfileController
{
    public function index()
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
}
