<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Forgate Password</title>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<meta name="generator" content="Web Page Maker">
<style type="text/css">
/*----------Text Styles----------*/
.ws6 {font-size: 8px;}
.ws7 {font-size: 9.3px;}
.ws8 {font-size: 11px;}
.ws9 {font-size: 12px;}
.ws10 {font-size: 13px;}
.ws11 {font-size: 15px;}
.ws12 {font-size: 16px;}
.ws14 {font-size: 19px;}
.ws16 {font-size: 21px;}
.ws18 {font-size: 24px;}
.ws20 {font-size: 27px;}
.ws22 {font-size: 29px;}
.ws24 {font-size: 32px;}
.ws26 {font-size: 35px;}
.ws28 {font-size: 37px;}
.ws36 {font-size: 48px;}
.ws48 {font-size: 64px;}
.ws72 {font-size: 96px;}
.wpmd {font-size: 13px;font-family: Arial,Helvetica,Sans-Serif;font-style: normal;font-weight: normal;}
/*----------Para Styles----------*/
DIV,UL,OL /* Left */
{
 margin-top: 0px;
 margin-bottom: 0px;
}
</style>


<style type="text/css">
div#container
{
	position:relative;
	width: 356px;
	margin-top: 0px;
	margin-left: auto;
	margin-right: auto;
	text-align:left; 
}
body { text-align:left;margin:0; font-size:16px; }

</style>

</head>
<body>

<div id="container">

<div id="g_image2" style="position:absolute; overflow:hidden; left:22px; top:0px; width:300px; height:147px; z-index:1"><img src="images/uf1.gif" alt="" title="" border=0 width=300 height=107></div>


<div id="image1" style="position:absolute; overflow:hidden; left:24px; top:7px; width:300px; height:136px; z-index:5"><img src="FirRegistration_files/default.jpeg" alt="" title="" border=0 width=300 height=50></div>


<div id="html1" style="position:absolute; overflow:hidden; left:43px; top:60px; width:300px; height:110px; z-index:6">


<?php
   include("conf.php");
?>

<form action="" method="post" >
Enter Security Code <br> <input type="text" name="forgatePass" />
  <input type="submit" value="search"  />
</form>
<table border="0"  width="50%" style="color:#C30; background-color:#CCC;" >
<?php

if($_POST["forgatePass"]!="")
{
 $forgate = $_POST["forgatePass"];
  $pass=0;
  $GLOBALS["name"];
  $GLOBALS["pas"];
	$q= mysql_query("select * from admin ");

	 while($row=mysql_fetch_row($q))
	      {
			if($forgate==$row[3])
		        {
					
  					$GLOBALS["name"]=$row[1];
  					$GLOBALS["pas"]=$row[2];
					$pass=1;
				}
		 }

	if($pass==1)
		{        echo "<tr><td>Name</td><td>". $GLOBALS["name"]."<br></td></tr>
						<tr><td>Password</td><td>".$GLOBALS["pas"]."<br></td></tr>
</td></tr></table>";
		}else {echo "<table style='color:#C30; background-color:#CCC;'><tr> <td colspan='2' > User has not found in our database record
";}

}
?>

</table>
</body>
</html>
