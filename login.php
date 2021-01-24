<?php

if (isset($_POST['submit']))
{

  $un=$_POST['username'];
  $pwd=$_POST['password'];

if ($un=='username' && $pwd=='password'){

  header("Location:$home.html");
}

}


 ?>
