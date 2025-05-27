<?php
include("conf.php");
session_start();
#  error_reporting(E_ALL);

?>
<div style="clear: both;">&nbsp;</div>

 <table width="80%" >
   <tr>

<?php

if($_GET["q"]!="" && $_GET["searchFir"]!="")
{
 $_SESSION["firTopic"]=$_GET["q"];
 $_SESSION["search"]=addslashes($_GET["searchFir"]);
}else {
	echo"<b>PLEASE FILL ALL FIELD</b>";
exit(0);
}

$GLOBALS['a']=0;
$GLOBALS['ab']=0;


 $q = mysql_query("select * from firview,remarks where firview.FIR_No
 like \"%$_SESSION[search]%\" AND firview.Type_Of_Crime_Id like \"%$_SESSION[firTopic]%\"  order by FIR_No;") or die("ERROR");
 
 while($obj=mysql_fetch_row($q))
 {	 
     if($obj[18]==1) 
	    {  
		 echo "<center><font color=Red size=+2  > This case has been solved. </font></center>"; 
		 exit(0);
		}	
		
	 }#end of while


/*echo "<pre><font color=red size=4.5em>
 Fir is not found in our database record 
 Please try again with correct information </font></pre><br>";
	*/  
	
$q = mysql_query("select * from firview,remarks where firview.FIR_No
 like \"%$_SESSION[search]%\" AND firview.Type_Of_Crime_Id like \"%$_SESSION[firTopic]%\"  order by FIR_No;") or die("ERROR");

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
      <td><?php echo $obj[4]; ?></td>
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
    

<tr>
<th>
 <?php echo "Download Fir Report"; ?>
</th>
 <td>
  <a href="download.php?file=<?php echo "Fir No ".$_SESSION["search"] ; ?>.doc" style="{
	text-decoration: none;	color: #4486C7;	text-decoration: underline;font-size: 1.5em;}"> Download</a></div>
  </td>
  </tr>
  </table>
</div></div>