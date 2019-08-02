<?php require "partials/header.php" ?>
<section class="admin">
    <h1>Hello, administrator!</h1>

    <div class="adminMenu">
        <a href="admin/users">Users</a>
        <a href="admin/posts">Posts</a>
        <a href="">Logout</a>
    </div>

    <h2>All posts</h2>

    <div class="post" >

        <div class="user">
            <div class="avatar"></div>
            <div class="username"></div>
        </div>
        <div class="image">
            <img src="../../public/images/" alt="">
        </div>
        <div class="likes"></div>
        <div class="desc">
            <p></p>
        </div>
    </div>

</section>
<?php require "partials/footer.php" ?>