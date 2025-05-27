<?php
include("conf.php");
session_start();
$GLOBALS["a"]=1;
   $q= mysql_query("SELECT * from sho JOIN police_station USING(policestationId);")or die("Error");
$_POST["Police_StationId"];

	  while($row=mysql_fetch_row($q))
	      {
			if($row[0]==$_POST["Police_StationId"]&& $row[1]==$_POST["shoID"] && $row[3]==$_POST["password"]){
			$_SESSION["name"]=$row[2];
			$_SESSION["location"]=$row[5];
			$_SESSION["section"]=$row[6];
			$_SESSION["logout"]="Log Out";
			$GLOBALS["a"]=0;
			$_SESSION["signinId"]=1;
			setcookie("InsertCookie", "visible", time()+3600);  
			header("Location:index.php");
					break;
					}		
		  }		  
if($GLOBALS["a"]==1) {
	$_SESSION["invalid"]=="Invalid user please try again";
	header("Location:adminLog.php");
		 }
?>