<?php require "partials/header.php" ?>
    <section class="login">
        <div class="cat"></div>
        <div class="loginspace">
            <form action="/authenticate" method="post">
                <input type="text" name="username" placeholder="Username" >
                <input type="password" name="password" placeholder="Password" >
                <button type="submit">LOGIN</button>
            </form>
        </div>
    </section>

<?php require "partials/footer.php" ?>