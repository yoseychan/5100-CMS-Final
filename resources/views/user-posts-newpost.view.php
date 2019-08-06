<?php require "partials/header.php" ?>
<?php require "partials/usernav.php" ?>

<section class="container">

    <h2>Create a new post</h2>

    <form class="adminform" action="/user/posts" method="post" enctype="multipart/form-data">
        <input type="hidden" name="users_id" value="<?=$user->id?>">
        <input name="image" type="file">
        <label for="description">Description</label>
        <textarea name="description" id="description" ></textarea>
        <button type="submit">Submit</button>
    </form>



</section>

<?php require "partials/footer.php" ?>
