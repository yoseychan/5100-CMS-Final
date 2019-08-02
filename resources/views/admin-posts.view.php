<?php require "partials/header.php" ?>
<?php require "partials/adminnav.php" ?>
<section class="admin">
    
    <h1>All Posts</h1>
    <div class="adminUserList">
        <div class="users">
            
            <h3>ID</h3>
           
            <h3>Img</h3>
            <h3>Description</h3>
            <h3>Users_id</h3>
            <h3>Actions</h3>
        </div>
        <?php foreach ($posts as $post): ?>
        <div class="users">
            <p><?= $post->id?><p>
            <img src="../images/<?=$post->image?>">
            <p><?= $post->description?></p>
            <p><?= $post->users_id?></p>
            
            <p>Edit | <a href="/admin/users/delete?id=<?= $post->id ?>">Delete</a></p>
        </div>
        <?php endforeach; ?>

    </div>
</section>
<?php require "partials/footer.php" ?>
