<?php

class SignIn
{

function login(){
	 
if($_SESSION["logout"]=="Log Out")
  {
    echo "<a href='adminLog.php'  title='Logout' class='style1'>Log Out</a>";
  }
 else
  {
    echo "<a href='adminLog.php' style='background:#09F;' title='Admin Login' class='style1'>Sign In</a>"; 
  }
}

function home(){
	 
if($_SESSION["logout"]=="Log Out")
  {
    echo "<a href='index.php' title='Home' style='background:#09F;' class='style1'>Home</a>";
  }
 else
  {
    echo "<a href='index.html' title='Home' style='background:#09F;' class='style1'>Home</a>"; 
  }
 }
}

$ob =new SignIn();

?>