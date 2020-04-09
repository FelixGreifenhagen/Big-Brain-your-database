<?php
     if (isset($_POST["submit"])) {
     	$name = $_POST['name'];
     	$subject = $_POST['subject'];
     	$land = $_POST['land'];
     	$mailFrom = $_POST['email'];
     	$message = $_POST['message'];

     	$mailTo = "f.greifenhagen@web.de";
     	$headers = "From: ".$mailFrom;
     	$txt = "You have received an email from ".$name.".\n\n".$message;

     	mail($mailTo, $subject, $txt, $headers);
     }
?>