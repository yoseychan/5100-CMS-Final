<?php require "partials/header.php" ?>
<?php require "partials/adminnav.php" ?>

<section class="container">
    
    <h1>All users</h1>
    <div class="adminUserList">
        <a class="newuser" href="/admin/users/newuser">+ New User</a>
        <table class="table table-hover admintable ">
            <thead class="tablecolor">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Username</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Password</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user->id?></td>
                    <td><?= $user->firstName?></td>
                    <td><?= $user->lastName?></td>
                    <td><?= $user->username?></td>
                    <td><?= $user->email?></td>
                    <td><?= $user->password?></td>
                    <td><?= $user->avatar?></td>
                    <td>
                        <a href="/admin/users/edit?id=<?= $user->id ?>"><i class="far fa-edit"></i></a>
                        <a href="/admin/users/delete?id=<?= $user->id ?>"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</section>
<?php require "partials/footer.php" ?>
