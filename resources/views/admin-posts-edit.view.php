<?php require "partials/header.php" ?>
<?php require "partials/adminnav.php" ?>

<section class="container">
<h2>Edit a post</h2>

    <form action="/admin/posts/update" method="POST" class="adminform">
        <input type="hidden" name="id" value="<?= $post->id?>" >

        <label for="image">Image name:</label>
        <input type="text" name="image" value="<?= $post->image?>">

        <label for="description">Description</label>
        <textarea type="text" name="description" value="<?= $post->description?>"> </textarea>

        <button type="submit">Save changes</button>

    </form>

</section>


<?php require "partials/footer.php" ?>

