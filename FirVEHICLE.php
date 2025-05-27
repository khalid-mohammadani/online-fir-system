
<?php

$q =$_GET[q];
if($q==1)
	   {
		
		 if($_COOKIE[InsertCookie]!="")
		 {
		  }else
		   {
	   	print("Admin panel only");
		break;	
	
		   }
		   
	   }
?>
<form id="form1" name="form1" method="post" action="<?php if($q==1)
	   {  echo "saveFir.php";}else  {	echo " searchVehicle.php ";  } ?>">

<div class="wpmd">
<div><b>Police stations:</b></div>
</div>
  <?php  
	    include("connect_db.php");
	  
 $q= mysql_query("
SELECT PolicestationId, CONCAT(PolicestationLocation, ' ', PsSection)
  AS full_name FROM police_station;");
 
 echo "<select name='Police_Station' id='Police_Station' style=width:215px;'>
    <option></option>    ";
	 while($row=mysql_fetch_row($q))
	    {	echo "<option value=".$row[0].">".$row[1]." Section </option>";	}
echo "</select>";  
 
 
 ?>
 
<BR></div>
<div class="wpmd">
<div><b>F.I.R. No:</b></div>
</div>
 <input type="text" name="FIR_No" id="FIR_No" size="30"/><BR>
<?php $q =$_GET[q];
if($q==1) { 
  ?>
</div>
<div class="wpmd">
<div> <b> Date of FIR (D-M-Y): </b></div>
</div>
 <select name='date' id="date" size="1" style="width:40px;">
	<option>-</option>
     <?php 
	 	for($a=1; $a<=31; $a++)
			{
				echo"<option value=$a>$a</option>";
			}
		?>
                </select>
	 - <select size="1" name='month' id="month" style="width:39px;" >
	  <option>-</option>
	 <?php 
	 	for($a=1; $a<=12; $a++)
			{
				echo"<option value=$a>$a</option>";
			}
		?>
                </select>
	 - 
	 <select size="1" name='year' id="year" style="width:55px;">
	   <option>-</option>
	   <?php 
	
	 	for($a=2012; $a>=1900; $a--)
			{
				echo"<option value=$a>$a</option>";
			}
		?>
	   </select>	 <BR>
<?php }
 $q =$_GET[q];
if($q==1) { 
  ?>
</div><div class="wpmd">
<div><b>Make:</b>&nbsp;&nbsp;&nbsp;&nbsp; </div>
</div>
<input type="text" name="Make" id="Make" size="30"/><BR>
<?php } ?>

<div class="wpmd">
<div><b>Model:</b></div>
</div>
<input type="text" name="Model" id="Model" size="30"/><BR>
<?php $q =$_GET[q];
if($q==1) { 
  ?>
<div class="wpmd">
<div><b>Color:</b></div>
</div>
 <input type="text" name="color" id="color" size="30"/><BR>
<?php }?>
</div><div class="wpmd">
<div><b>Registration No:</b></div>
</div>
 <input type="text" name="RegistrationNo" id="RegistrationNo" size="30"/><BR>
<?php $q =$_GET[q];
if($q==1) { 
  ?>
</div>

<div class="wpmd">
<div><b>Type of Vehicle:</b></div>
 <input type="text" name="chassisNo" id="chassisNo" size="30"/><BR>
<?php } $q =$_GET[q];
if($q==1) { 
  ?>
</div>

<div class="wpmd">
<div><b>Engine No:</b></div>
</div>
 <input type="text" name="engineNo" id="engineNo" size="30"/><BR>
<?php }?>
<?php $q =$_GET[q];
if($q==1) { 
  ?> </div><div class="wpmd">
<div><b>Remarks:</b></div>
</div>
 <input type="text" name="remarks" id="remarks" size="30"/><BR>
<?php } ?>

 <input name="button" type="submit" class="ws16" value="<?php $q = $_GET[q];
if($q==1) {echo "Save";}else{echo "Search"; }    ?>" >  
</form>