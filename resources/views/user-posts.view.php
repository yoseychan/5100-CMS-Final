<?php require "partials/header.php" ?>
<?php require "partials/usernav.php" ?>
<section class="container">
    <div class="makenew"><a href="/user/posts/newpost?id=<?=$user->id?>" class="newpost">Create a new post</a></div>
    <h1><?=$user->username?>'s posts</h1>
    <?php foreach ($posts as $post){
        if ($post->users_id === $user->id) { ?>

    <div class="post" >

        <div class="user">
            <div class="avatar"></div>
            <div class="username"><h2><?= $user->username?><span> posted</span></h2></div>
            <a href="/user/posts/delete?id=<?=$post->id?>" class="remove"><i class="fas fa-trash-alt"></i></a>
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
    <?php } } ?>

</section>

<?php require "partials/footer.php" ?>