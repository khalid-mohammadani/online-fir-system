<?php
 
  $con= mysql_connect("localhost","root","") or die("connect to databse is failed");
   
   $db= mysql_select_db("fir",$con) or die("database not found");
   
   
  /*
  $q = mysql_query("select * from firview");
echo "<table border=1>";
  while($row=mysql_fetch_row($q))
  	{
		echo "<tr><td>".$row[0]."<td>".$row[1]."</td></tr>";
	  
	  
	  
	  }*/
	  
?>