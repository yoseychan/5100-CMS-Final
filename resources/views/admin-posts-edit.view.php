<?php require "partials/header.php" ?>
<?php require "partials/adminnav.php" ?>

<section class="admin">
<h2>Edit a post</h2>

    <form action="/admin/posts/update" method="POST" class="adminform">
        <input type="hidden" name="id" value="<?= $post->id?>" >

        <label for="image">Image name:</label>
        <input type="text" name="image" value="<?= $post->image?>">

        <label for="description">Description</label>
        <input type="text" name="description" value="<?= $post->description?>">

        <label for="users_id">Users ID</label>
        <input type="text" name="users_id" value="<?= $post->users_id?>">

        <button type="submit">Save changes</button>

    </form>

</section>


<?php require "partials/footer.php" ?>

