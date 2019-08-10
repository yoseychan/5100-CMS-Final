<?php
namespace Cms\Controllers;

use Cms\Core\App;

class UserPostsController
{
    public function index()
    {
        $user = App::get('db')->fetchOne("users", $_GET)[0];
        $posts = App::get('db')->fetchAll("posts");
        return view('user-posts', compact('user', 'posts'));
    }

    public function store()
    {
        $dir = getcwd() . "\images";


        if (isset($_FILES['image'])) {
            if($_FILES['image']['type'] === 'image/jpeg' || $_FILES['image']['type'] === 'image/png') {
                $imgName = time() . "_" . $_FILES['image']['name'];
                move_uploaded_file(
                    $_FILES['image']['tmp_name'],
                    $dir . "/" . $imgName
                );
                $_POST['image'] = $imgName;
            }else {
                $error = $_FILES['image']['type'] . "is not supported. Please choose a jpg or png file type";
                echo $error;
            }
        }

        App::get('db')->insert("posts", $_POST);

        echo json_encode([
            'result' => 'success'
        ]);
        dd($dir);
        return redirect('/user');
    }

    public function delete()
    {
        App::get('db')->delete("posts", $_GET);
        return redirect('/user');
    }
}


