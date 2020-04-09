<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: index.php");
  exit;
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <link href="account.css" type="text/css" rel="Stylesheet" >
   <title>Accountsite</title>
 </head>
 <body>
  <header>
   <h1 class="Name">Big Brain</h1>
   <nav class="navigation">
     <a href="">Main Page</a>
     <a href="">Log In</a>
     <a href="">Sign Up</a>
   </nav>
  </header>
  <section class="solve">
    
  </section>
  <section class="middle">
    <table width="100%">
      <tr>
        <th>Number</th>
        <th>Link</th>
        <th>Stored at</th>
      </tr>      
    </table>  
  </section>
  <section class="sides">
     <a href="addinf.php">Add pers. information</a>
     <a href="safe.php">Storage</a><br>
     <a href="logout.php">Log out</a>
  </section>
  <footer>
    <nav>
      <a href="">Impressum</a><br>
      <a href="">Help</a><br>
      <small>&copy; Account</small>
    </nav>
  </footer>
 </body>
</html>