<?php
$router->get('', 'PagesController@home');
$router->get('api/tasks', 'TasksController@apiGet');

$router->post('tasks/submit', 'TasksController@store');


//USER ROUTES
$router->get('user', 'PagesController@user');
//POSTS
$router->get('user/posts', 'UserPostsController@index');
//PROFILE
$router->get('user/profile', 'UserProfileController@index');



//ADMIN ROUTES
$router->get('admin', 'PagesController@admin');
//USERS
$router->get('admin/users', 'AdminUsersController@index');
//$router->get('admin/users', 'AdminUsersController@delete');
//POSTS
$router->get('admin/posts', 'AdminPostsController@index');
//$router->get('admin/posts', 'AdminPostsController@delete');
//Tasks
$router->get('admin/tasks', 'AdminTasksController@index');
//$router->get('admin/tasks/delete', 'AdminTasksController@delete');

