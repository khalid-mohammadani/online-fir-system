<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Download File</title>

</head>
<body onload="download()">
<?php

$file=$_GET["file"];

#readfile($file);
header("content-type:application/MS-word");

header("content-disposition:attachment;Filename=".$file);

   error_reporting(0);
include("conf.php");
session_start();

echo "<h2><b><font color=Green size=+3>ONLINE FIR REPORT ". $file." </font></b></h2><br/>";
		

 $q=mysql_query("SELECT *  from firview,fir_topic where firview.FIR_No=".$_SESSION['search']." AND
  firview.Type_Of_Crime_Id = fir_topic.FirTopicId;");

 echo"<table width='80%' align=center style='left:300;' >
   <tr>
      ";
while($obj=mysql_fetch_row($q))
 	{
	
	
	echo	$key = array_search('$_SESSION[search]', $obj);
		
		echo "<td>FIR No</td>
<td>".$obj[0];

 ?>
 </td>
 </tr>
  
   <tr>
      <td>Type_Of_Crime</td>
      <td><?php echo $obj[1]; ?></td>
    </tr>
    
    <tr>
    <td>Section</td>
      <td><?php echo $obj[2]; ?></td>
    </tr>
    
    <tr>
    <td>Name</td>
      <td><?php echo "<font color='#009900'>".$obj[4]."</font>"; ?></td>
    </tr>
    
    <tr>
      <td>S/D/Wo</td>
      <td><?php echo $obj[5]; ?></td>
    </tr>
    
    <tr>
      <td>Full Address</td>
      <td><?php echo $obj[6]; ?>
      </td>
    </tr>
    
    <tr>
      <td>Occupation</td>
      <td><?php echo $obj[7]; ?></td>
    </tr>
    <tr>
      <td>Cast</td>
      <td><?php echo $obj[8]; ?>     </td>
    </tr>
    <tr>
      <td>Age</td>
      <td><?php echo $obj[9]; ?></td>
    </tr>
    <tr>
      <td>Marital Status</td>
      <td><?php echo $obj[10]; ?></td>
    </tr>
    <tr>
      <td>General Appearance</td>
      <td><?php echo $obj[11]; ?></td>
    </tr>
    <tr>
      <td>Height</td>
      <td><?php echo $obj[12]; ?></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><?php echo $obj[13]; ?></td>
    </tr>
    <tr>
      <td>Identification Mark</td>
      <td><?php echo $obj[14]; ?></td>
    </tr>
   
    <tr>
      <td>Criminal_History</td>
      <td><?php echo $obj[15]; ?></td>
    </tr>
    <tr>
      <td>Cases Against</td>
      <td><?php echo $obj[16]; ?></td>
    </tr>
    <tr>
      <td>Other Details</td>
      <td><?php echo $obj[17]; ?></td>
    </tr>
<tr>
      <td>Remarks</td>
      <td><?php 
	  $q2= mysql_query("SELECT * FROM remarks where  RemarksID like \"%$obj[18]%\" ");
		while($row2=mysql_fetch_row($q2)){	echo $row2[1]; }
	  ?></td>
    </tr>
	<tr>
      <td>Police Station S-H-O</td>
      <td>	<?php  echo $obj[19];  ?></td>
    </tr>
    <tr>
      <td>Police Station</td>
      <td> <?php
  $q3= mysql_query("SELECT PolicestationId, CONCAT(PolicestationLocation, ' ', PsSection)
  AS full_name FROM police_station where PolicestationId like  \"%$obj[3]%\" ");
		while($row3=mysql_fetch_row($q3)){	echo $row3[1]; }
	      break;
		 }# end of outer most while  
	    ?> </td>
    </tr>
      </table>
  
</body>
</html>