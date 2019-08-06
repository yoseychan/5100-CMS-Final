<?php
$router->get('', 'PagesController@home');
$router->get('api/tasks', 'TasksController@apiGet');

$router->post('tasks/submit', 'TasksController@store');


//USER ROUTES
$router->get('user', 'PagesController@user');
$router->get('user/posts/newpost', 'PagesController@newpost');
//USER POSTS
$router->get('user/posts', 'UserPostsController@index');
$router->post('user/posts', 'UserPostsController@store');
$router->get('user/posts/delete', 'UserPostsController@delete');

//PROFILE
//$router->get('user/profile', 'UserProfileController@index');



//ADMIN ROUTES
$router->get('admin', 'PagesController@admin');
$router->get('admin/users/newuser', 'PagesController@newuser');
//ADMIN USERS
$router->get('admin/users', 'AdminUsersController@index');
$router->post('admin/users/find', 'AdminUsersController@find');
$router->post('admin/users', 'AdminUsersController@store');
$router->post('admin/users/update', 'AdminUsersController@update');
$router->get('admin/users/edit', 'AdminUsersController@edit');
$router->get('admin/users/delete', 'AdminUsersController@delete');
//ADMIN POSTS
$router->get('admin/posts', 'AdminPostsController@index');
$router->post('admin/posts/find', 'AdminPostsController@find');
$router->post('admin/posts', 'AdminPostsController@store');
$router->post('admin/posts/update', 'AdminPostsController@update');
$router->get('admin/posts/edit', 'AdminPostsController@edit');
$router->get('admin/posts/delete', 'AdminPostsController@delete');


//Tasks
$router->get('admin/tasks', 'AdminTasksController@index');
$router->get('admin/tasks/delete', 'AdminTasksController@delete');

