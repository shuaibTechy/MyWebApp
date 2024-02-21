
<?php
  include_once 'header.php';
?>
  <section class="signup-form">
    <h2>Sign Up</h2>
     <div class="signup-form-form">
        <form action="include/signup.inc.php" method="post">
          <input type="text" name="name" placeholder="Full name....."><br/>
          <input type="text" name="email" placeholder="Email....."><br/>
          <input type="text" name="uid" placeholder="Username....."><br/>
          <input type="password" name="pwd" placeholder="Password...."><br/>
          <input type="password" name="pwdrepeat" placeholder="Repeat Password...."><br/>
          <button type="submit" name="submit">Sign Up</button>
        </form>
      </div>
  </section>
<?php
  include_once 'footer.php';
?>


    


    