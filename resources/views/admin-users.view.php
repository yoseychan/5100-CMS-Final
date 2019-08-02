<?php require "partials/header.php" ?>
<?php require "partials/adminnav.php" ?>

<section class="admin">
    
    <h1>All users</h1>
    <div class="adminUserList">
        <a class="newuser" href="/users/insert">+ New User</a>
        <div class="users">
            
            <h3>ID</h3>
            <h3></h3>
            <h3>Avatar</h3>
            <h3>Username</h3>
            <h3>Actions</h3>
        </div>
        <?php foreach ($users as $user): ?>
        <div class="users">
            <p><?= $user->id?><p>
                <p></p>
            <p><?= $user->avatar?> avatar</p>
            <p><?= $user->username?></p>
            <p>Edit | <a href="/admin/users/delete?id=<?= $user->id ?>">Delete</a></p>
        </div>
        <?php endforeach; ?>

    </div>

</section>
<?php require "partials/footer.php" ?>
