<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="register.css">
    <title>Registration</title>
  </head>
  <body>
  <header>
   <h1 class="Name">Big Brain</h1>
   <nav class="navigation">
      <a href="http://localhost/Big%20Brain/Startseite.html">Main Page</a>
      <a href="http://localhost/accountform/index.php">Log In</a>
      <a href="http://localhost/accountform/register.php">Sign Up</a>
   </nav>
  </header>
  <section class="solve">
    
  </section>
  <section class="middle">
    <?php
    if(isset($_POST["submit"])){
      require("mysql.php");
      $stmt = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME = :user"); //Username überprüfen
      $stmt->bindParam(":user", $_POST["username"]);
      $stmt->execute();
      $count = $stmt->rowCount();
      if($count == 0){
        //Username ist frei
        $stmt = $mysql->prepare("SELECT * FROM accounts WHERE EMAIL = :email"); //Username überprüfen
        $stmt->bindParam(":email", $_POST["email"]);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count == 0){
          if($_POST["pw"] == $_POST["pw2"]){
            //User anlegen
            $stmt = $mysql->prepare("INSERT INTO accounts (USERNAME, PASSWORD, EMAIL) VALUES (:user, :pw, :email)");
            $stmt->bindParam(":user", $_POST["username"]);
            $hash = password_hash($_POST["pw"], PASSWORD_BCRYPT);
            $stmt->bindParam(":pw", $hash);
            $stmt->bindParam(":email", $_POST["email"]);
            $stmt->execute();
            echo "Your Account was created.";
          } else {
            echo "The passwords aren´t identical.";
          }
        } else {
          echo "The email is already taken.";
        }
      } else {
        echo "The username is already taken.";
      }
    }
     ?>
    <form action="register.php" method="post" style="border:1px solid #ccc">
     <div class="container">
      <p>Please fill in this formular to create an account.</p>

      <label for="username"><b>Username</b></label>
      <input type="text" name="username" placeholder="Enter Username" required><br>

      <label for="email"><b>Email</b></label>
      <input type="text" name="email" placeholder="Enter Email" required><br>

      <label for="pw"><b>Password</b></label>
      <input type="password" name="pw" placeholder="Enter Password" required><br>

      <label for="pw2"><b>Repeat password</b></label>
      <input type="password" name="pw2" placeholder="Repeat Password" required><br>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom: 15px"> Remember me
      </label>

      <a href="index.php" class="down">Alredy created an Account?</a>

     <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" name="submit" class="signupbtn">Submit</button>
     </div>
     </div>
    </form>
  </section>
  <section class="sides">
    
  </section>
  <footer>
    <nav>
      <a href="Impressum.html">Impressum</a><br>
      <a href="http://localhost/contactform">Help</a><br>
      <small>&copy; Sign Up</small>
    </nav>
  </footer>
 </body>
</html>