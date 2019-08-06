<?php require "partials/header.php" ?>
<?php require "partials/usernav.php" ?>
<section class="container">
    <h2>All posts</h2>
    <?php foreach ($posts as $post): ?>

    <div class="post" >

        <div class="user">
            <?php foreach($users as $user){
            if ($user->id === $post->users_id) { ?>
            <div class="avatar"></div>
                <div class="username">
                    <h2><a href="/user/posts?id=<?=$user->id?>"><?= $user->username?></a>
                        <span> posted</span>
                    </h2>
                </div>
            <?php }} ?>
        </div>

        <div class="image">
            <img src="../images/<?=$post->image?>" alt="posts image" >
        </div>
        <div class="likes"></div>
        <div class="desc">
            <p><?= $post->description?></p>
        </div>
        <div class="ornament"></div>
    </div>
    <?php endforeach; ?>

</section>
<?php require "partials/footer.php" ?>