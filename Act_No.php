
<?php
include("conf.php");
session_start();
$_SESSION["actId"]=$q1=$_GET['q'];

if($q1==""){
	
	echo"--<font color='#FF0000'>First Select Type of Crime--</font>";
	break;
	}

#echo"<form action='#' method='post'>";
    $q=mysql_query("
SELECT ActNoId,Act_No,GROUP_CONCAT(Act_No)  FROM actno
         where FirTopicId=$q1;");
 while($row=mysql_fetch_row($q)){
	 
	   echo"<input type='checkbox' name='chkb".$row[0]."' value='$row[2]' checked='checked'>".$row[2];
	 
	 }

/*    $q=mysql_query("
SELECT ActNoId,Act_No,GROUP_CONCAT(Act_No)  FROM actno
         where FirTopicId=6;");
    while($row=mysql_fetch_row($q)){
		echo	$_SESSION["act"]=$_POST['chkb'.$row[0]];
    }
	*/	
?>
