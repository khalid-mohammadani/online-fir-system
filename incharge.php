
<?php
include("conf.php");
$q1=$_GET['q1'];

/*if($q1==""){
	
	echo"--<font color='#FF0000'> Select Police Station</font>";
	break;
	}
*/
    $q=mysql_query("SELECT sho.SHOId,sho.SHOName 
   FROM sho where sho.PoliceStationID=$q1;");
 while($row=mysql_fetch_row($q))
      {
		       
	   echo"<input type='text' value='$row[1]' disabled>";
	   echo"<input type='hidden' id='SHO' name='SHO' value='$row[1]' >";
		  
		  }




/*    $q=mysql_query("select * from actno where firtopicid=6;");

while($row=mysql_fetch_row($q)){
			echo $_POST['chkb'.$row[0]];
		
		}*/
		
?>