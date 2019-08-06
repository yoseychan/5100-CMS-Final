<?php require "partials/header.php" ?>
<?php require "partials/adminnav.php" ?>

<section class="admin">

<h2>Edit a user</h2>

    <form action="/admin/users/update" method="POST" class="adminform">
        <input type="hidden" name="id" value="<?= $user->id?>" >

        <label for="firstName">First name</label>
        <input type="text" name="firstName" value="<?=$user->firstName?>">

        <label for="lastName">Last name</label>
        <input type="text" name="lastName" value="<?=$user->lastName?>">

        <label for="username">Username</label>
        <input type="text" name="username" value="<?=$user->username?>">

        <label for="email">E-mail</label>
        <input type="email" name="email" value="<?=$user->email?>">

        <label for="password">Password</label>
        <input type="password" name="password" value="<?=$user->password?>">

        <button type="submit">Save changes</button>


    </form>

</section>


<?php require "partials/footer.php" ?>

