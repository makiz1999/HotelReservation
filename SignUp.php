<?php
  require "header.php"
 ?>
<main>
  <div class="container">
    <section id="showcase">
        <h1>SignUp
          <form action="FunctionsAndDatabase/SignUpFunc.php" method="post">
            <input type "text" name = "uid" placeholder = "Username"><br>
            <input type="text" name="email" placeholder="E-mail"><br>
            <input type="password" name="pwd" placeholder="Password"><br>
            <input type="password" name="pwd-repeat" placeholder="Re-type Password"><br>
            <button type="submit" name="signup-submit">SignUp</button>
          </form>
        </h1>
        <?php
          if(isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
              echo '<p>Fill all fields!</p>';
            } else if ($_GET['error'] == "invalidEmailuid") {
              echo '<p>invalid username and e-mail!</p>';
            }else if ($_GET['error'] == "invaliduid") {
              echo '<p>invalid username!</p>';
            }else if ($_GET['error'] == "invalidEmail") {
              echo '<p>invalid e-mail!</p>';
            }else if ($_GET['error'] == "checkpassword") {
              echo '<p>Your retyped password does not match ypur original password!</p>';
            }else if ($_GET['error'] == "usertaken") {
              echo '<p>Username is already taken!</p>';
            }
          }else if (isset($_GET['signup'])) {
            if ($_GET['signup'] == "success") {
              echo '<p>Signup Successful!</p>';
            }
          }

         ?>
    </section>
  </div>
</main>

<?php
  require "Footer.php"
 ?>
