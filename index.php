<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
	<meta charset="utf-8">
  <link href="Help.css" type="text/css" rel="Stylesheet" >
	<title>Help</title>
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
	<form action="sending.php" method="post">
      <label for="name"><b>Name:</b></label><br>
      <input type="text" name="name" required><br><br>
 
      <label for="email"><b>Email:</b></label><br>
      <input type="email" name="email" required><br><br>
 
      <label for="subject"><b>Subject:</b></label><br>
      <input type="text" name="subject" required><br><br>
      
      <label for="land">Land:</label>
      <select name="land">
        <option value="germany">Germany</option>
        <option value="france">France</option>
        <option value="great britain">Great Britain</option>
      </select><br>
 
      <textarea name="message" rows="8" cols="80" required></textarea> <br><br>
      <button type="submit" name="submit">Send</button>
    </form>
   </section>
   <section class="sides">
    
   </section>
   <footer>
    <nav>
      <a href="Impressum.html">Impressum</a><br>
      <a href="Help.html">Help</a><br>
      <small>&copy; Help</small>
    </nav>
   </footer>
  </body>
</html>