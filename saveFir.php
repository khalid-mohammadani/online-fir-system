<?php
include("conf.php");

error_reporting(0);
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Save</title>
<style>
#ok{ visibility:hidden; color:#3C0; font-size:2em;}
</style>

</head>

<body onload="ok()">

<?php
  
 $button=$_POST["button"];
  
  if($button=="save"){ 
 $sdwo=$_POST["S/D/Wo"];
	  
	 $_POST[Police_Station];
	 
	 $_SESSION["actId"];
	    $q=mysql_query("SELECT ActNoId,Act_No,GROUP_CONCAT(Act_No)  FROM actno
         where FirTopicId=$_SESSION[actId]");
 while($row=mysql_fetch_row($q)){
	$_SESSION[act]=$_POST["chkb".$row[0]];
	 }
	 
 
/* echo "insert into firview values($_POST[FIR_No],$_POST[firTopic],'$_SESSION[act]','$_POST[Police_Station]',
 '$_POST[Name]','$sdwo', '$_POST[address]',  '$_POST[occupation]','$_POST[cast]',
 $_POST[Age], '$_POST[Marital_Status]','$_POST[General_Appearance]','$_POST[Height]', '$_POST[Gender]','$_POST[Id_Mark]', '$_POST[Criminal_History]',  '$_POST[Cases_Against]','$_POST[others]','$_POST[remarks]','$_POST[SHO]')";
 */
 $msg=  mysql_query("insert into firview values($_POST[FIR_No],$_POST[firTopic],'$_SESSION[act]','$_POST[Police_Station]',
 '$_POST[Name]','$sdwo', '$_POST[address]',  '$_POST[occupation]','$_POST[cast]',
 $_POST[Age], '$_POST[Marital_Status]','$_POST[General_Appearance]','$_POST[Height]', '$_POST[Gender]','$_POST[Id_Mark]', '$_POST[Criminal_History]',  '$_POST[Cases_Against]','$_POST[others]','$_POST[remarks]','$_POST[SHO]')");
 
 echo $msg;
if($msg!=1) 
 {
	 setcookie("save","&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FIR is not saved!",time()+3600);
	header("Location:FirViewForm1.php");
 }else{
	 
	 setcookie("save","Fir#$_POST[FIR_No] is saved insert an other FIR",time()+3600);
	header("Location:FirViewForm1.php");
	 }
  }
else{
	  
	 echo  $_POST[Police_Station];
  echo "<br>".$_POST["FIR_No"]; 
  $Date= $_POST["date"]."-".$_POST["month"]."-".$_POST["year"];
  echo "<br>".$Date;
  echo "<br>".$_POST["Make"];
  echo "<br>".$_POST["Model"];
  echo "<br>".$_POST["RegistrationNo"];
  echo "<br>".$_POST["chassisNo"];
  echo "<br>".$_POST["engineNo"];
  echo "<br>".$_POST["color"];
  
  echo "<br>".$_POST["remarks"]."<br>";
 

echo "insert into vehicleFir values($_POST[FIR_No],$_POST[Police_Station],'$Date','$_POST[Make]','$_POST[Model]','$_POST[RegistrationNo]','$_POST[chassisNo]','$_POST[engineNo]','$_POST[color]','$_POST[remarks]')";
 

echo $q = mysql_query( "insert into vehicleFir values($_POST[FIR_No],$_POST[Police_Station],'$Date','$_POST[Make]','$_POST[Model]','$_POST[RegistrationNo]','$_POST[chassisNo]','$_POST[engineNo]','$_POST[color]','$_POST[remarks]')") or mysql_error();
 
if($q==1)
 header("Location:FirVEHICLE.html");
else 
 header("Location:FirVEHICLE.html");
  
	  
	  }

?>
</body>
</html>
