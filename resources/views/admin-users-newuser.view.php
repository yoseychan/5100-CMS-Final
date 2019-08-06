<?php require "partials/header.php" ?>
<?php require "partials/adminnav.php" ?>

<section class="admin">

    <h2>Add a new user</h2>

    <form action="/admin/users" method="POST" class="adminform">
        <label for="firstName">First name</label>
        <input type="text" name="firstName" value="">

        <label for="lastName">Last name</label>
        <input type="text" name="lastName" value="">

        <label for="username">Username</label>
        <input type="text" name="username" value="">

        <label for="email">E-mail</label>
        <input type="email" name="email" value="">

        <label for="password">Password</label>
        <input type="password" name="password" value="">

        <button type="submit">Submit</button>

    </form>

</section>


<?php require "partials/footer.php" ?>

