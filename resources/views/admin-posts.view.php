<?php require "partials/header.php" ?>
<?php require "partials/adminnav.php" ?>
<section class="admin">
    
    <h1>All Posts</h1>
    <div class="adminUserList">
        <table class="table table-hover admintable ">
            <thead class="tablecolor">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">User ID</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($posts as $post): ?>
                <tr>
                    <td><?= $post->id?></td>
                    <td><img src="../images/<?= $post->image?>" alt=""></td>
                    <td><?= $post->description?></td>
                    <td><?= $post->users_id?></td>
                    <td><a href="/admin/posts/edit?id=<?= $post->id ?>">Edit</a> | <a href="/admin/posts/delete?id=<?= $post->id ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
<?php require "partials/footer.php" ?>
