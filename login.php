<?php
    include_once 'header.php';
?>
      <section class="login-form">
        <h2>Login</h2>
        <div class="login-form-form">
            <form action="include/login.inc.php" method="post">
                <input type="text" name="name" placeholder="Username or Email....">
                <input type="text" name="pwd" placeholder="Password.....">
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
      </section>
<?php
    include_once 'footer.php';
?>

    


    