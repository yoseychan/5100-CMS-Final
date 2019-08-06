<?php require "partials/header.php" ?>
<?php require "partials/adminnav.php" ?>
<section class="admin">
    <h1>Hello, administrator!</h1>
    <h2>All posts</h2>
    <?php foreach ($posts as $post): ?>

    <div class="post" >

        <div class="user">
            <div class="avatar"></div>
            <div class="username"><?=$post->users_id?></div>
        </div>
        <div class="image">
            <img src="../images/<?=$post->image?>" alt="posts image" >
        </div>
        <div class="likes"></div>
        <div class="desc">
            <p><?= $post->description?></p>
        </div>
    </div>
    <?php endforeach; ?>

</section>
<?php require "partials/footer.php" ?>