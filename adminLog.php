<!DOCTYPE html>
<head><link rel="SHORTCUT ICON" href="images/ffir1.psd.png"/>
  <title>Online FIR</title>
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
a.style1:link{color:#FFFFFF;text-decoration: none;}
a.style1:visited{color:#FFFFFF;text-decoration: none;}
a.style1:hover{color:#FFFFFF;text-decoration:blink;}
a.style1:active{color:#FFFFFF;text-decoration: none;}
</style>

<script src="ac_activex.js" type="text/javascript"></script>

<style type="text/css">
div#container
{
	position:relative;
	width: 798px;
	margin-top: 0px;
	margin-left: auto;
	margin-right: auto;
	text-align:left; 
}
body {text-align:center;margin:0;}
</style>

<script type="text/javascript">
// Massage for fields
function check(){
	var shoID=document.getElementById("shoID").value;

	var pas=document.getElementById("password").value;

	var psId=document.getElementById("Police_StationId").value;
	if(shoID!="" && pas!="" && psId!="")
		{
			document.adminlogin.submit();

		}else{

			   alert("Please fill all field to login");
			}

	}

//iframe show and hidden
 var stat; 
 var delay=60000;//delay in milliseconds 

function show(){ 

var oIfr = document.getElementById('ifr'); 
oIfr.style.display=(oIfr.style.display=='block')?'block':'block'; 
//document.getElementById("s").style.visibility="hidden";
document.getElementById("s").style.backgroundColor="#69F";

stat = setTimeout('hid()',delay) 

} 


function hid(){ 

var y=window.confirm("Do you wan to search password again ");
if(y==true){
	  show();
	}
	else{
		 var oIfr = document.getElementById('ifr'); 
		 oIfr.style.display=(oIfr.style.display=='block')?'none':'block'; 
document.getElementById("s").style.backgroundColor="white";

		}
}
	
</script>
</head>
<body>
<?php
 $_GET["logout"];
if($_GET["logout"]==1)
{
	$_SESSION["signinId"]=0;
#unset($_SESSION["signinId"]);

setcookie("InsertCookie", "", time()-3600);  

session_unset();

session_destroy();


}

?>

<div id="container">

<div id="g_shape1" style="position:absolute; overflow:hidden; left:22px; top:146px; width:740px; height:30px; z-index:0"><img border=0 width="100%" height="100%" alt="" src="images/shape3375250.png"></div>

<div id="g_image2" style="position:absolute; overflow:hidden; left:22px; top:0px; width:740px; height:147px; z-index:1"><img src="images/uf1.gif" alt="" title="" border=0 width=740 height=147></div>

<div id="roundrect1" style="position:absolute; overflow:hidden; left:56px; top:203px; width:208px; height:222px; z-index:2"><img border=0 width="100%" height="100%" alt="" src="images/roundrect8060046.png"></div>

<div id="roundrect3" style="position:absolute; overflow:hidden; left:549px; top:198px; width:195px; height:239px; z-index:3"><img border=0 width="100%" height="100%" alt="" src="images/roundrect8060046.png"></div>

<div id="g_text2" style="position:absolute; overflow:hidden; left:65px; top:151px; width:642px; height:20px; z-index:4">
<div class="wpmd">
<div><font face="Tahoma"><B><a href="index.html"   title="Home" class="style1"  >HOME</a></B></font><font color="#333333" face="Tahoma"><B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </B></font><font color="#FFFFFF" face="Tahoma"><B>|</B></font><font color="#333333" face="Tahoma"><B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </B></font><font face="Tahoma"><B><a href="aboutUs.html" title="" class="style1">ABOUT US</a></B></font><font color="#333333" face="Tahoma"><B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </B></font><font color="#FFFFFF" face="Tahoma"><B>|</B></font><font color="#333333" face="Tahoma"><B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </B></font><font face="Tahoma"><B><a href="FirTopic.html" title="Topics of Fir" class="style1">FIR FILE</a></B></font><font color="#333333" face="Tahoma"><B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </B></font><font color="#FFFFFF" face="Tahoma"><B>| </B></font><font color="#333333" face="Tahoma"><B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </B></font><font face="Tahoma"><B><a href="Contact US.php" title="Contact Us" class="style1">CONTACTS</a></B></font><font color="#333333" face="Tahoma"><B>&nbsp;&nbsp;&nbsp; </B></font><font color="#FFFFFF" face="Tahoma"><B>|</B></font><font color="#333333" face="Tahoma"><B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </B></font><font face="Tahoma"><B><a href="searchFir.html" title="" class="style1">SEARCH</a></B></font><font color="#333333" face="Tahoma"><B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </B></font><font color="#FFFFFF" face="Tahoma"><B>|</B></font><font color="#333333" face="Tahoma"><B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </B></font><font face="Tahoma"><B><a href="adminLog.php" title="Login" class="style1" style="background:#09F;">Sign In</a></B></font><font color="#333333" face="Tahoma"><B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </B></font><font color="#FFFFFF" face="Tahoma"><B>|</B></font></div>
</div></div>

<div id="g_shape2" style="position:absolute; overflow:hidden; left:30px; top:755px; width:746px; height:51px; z-index:5"><img border=0 width="100%" height="100%" alt="" src="images/shape3375296.png"></div>

<div id="shape3" style="position:absolute; overflow:hidden; left:646px; top:806px; width:100px; height:21px; z-index:6"><img border=0 width="100%" height="100%" alt="" src="images/shape8060046.png"></div>

<div id="g_text3" style="position:absolute; overflow:hidden; left:301px; top:778px; width:365px; height:41px; z-index:7">
<div class="wpmd">
<div><font color="#FFFFFF" face="Tahoma">2011-2012 Copyright � IICT. All rights reserved. </font></div>
</div></div>

<div id="text7" style="position:absolute; overflow:hidden; left:62px; top:210px; width:188px; height:204px; z-index:8">
<div class="wpmd">
<div><font color="#808080" face="Tahoma"><B>Quick Navigation</B></font></div>
<div><font color="#808080" face="Tahoma"><B><BR></B></font></div>
<UL>
<li><font color="#808080" face="Tahoma"><a href="Navigation1.php?&navigationId=&#54&user=Guest" class="style1" style="color:#000;" >Police Stations</a></font></li>
<li><font color="#808080" face="Tahoma"><a href="Navigation1.php?&navigationId=&#49&user=Guest"class="style1" style="color:#000;">Crime Preventions</a></font></li>
<li><font color="#808080" face="Tahoma">
<a href="Navigation1.php?&navigationId=&#50&user=Guest" class="style1" style="color:#000;">Personal safety</a></font></li>
<li><font color="#808080" face="Tahoma"><a href="Navigation1.php?&navigationId=&#51&user=Guest" class="style1" style="color:#000;">Home security</a></font></li>
<li><font color="#808080" face="Tahoma"><a href="Navigation1.php?&navigationId=&#52&user=Guest" class="style1" style="color:#000;">Fir Registration</a></font></li>
<li><font color="#808080" face="Tahoma"><a href="Navigation1.php?&navigationId=&#53&user=Guest" class="style1" style="color:#000;">Careers</a></font></li>
</UL>
</div></div>

<div id="roundrect4" style="position:absolute; overflow:hidden; left:58px; top:431px; width:204px; height:150px; z-index:9"><img border=0 width="100%" height="100%" alt="" src="images/roundrect8060046.png"></div>

<div id="text5" style="position:absolute; overflow:hidden; left:66px; top:436px; width:178px; height:142px; z-index:10">
<div class="wpmd">
<div><font color="#808080" face="Tahoma"><B> Public Information</B></font></div>
<div><font color="#808080" face="Tahoma"><B><BR></B></font></div>
<UL>
<li><font color="#808080" face="Tahoma"><a href="FirViewForm1.php" class="style1" style="color:#000;">FIR Of Murder Case </a></font></li>
<li><font color="#808080" face="Tahoma"><a href="FirVEHICLE.html" class="style1" style="color:#000;">FIR of Vehicle Thefts</a></font></li>
<li><font color="#808080" face="Tahoma"><a href="missingPersonsView.php" class="style1" style="color:#000;" >Missing Persons</a></font></li>
</UL>
</div></div>

<div id="roundrect5" style="position:absolute; overflow:hidden; left:60px; top:595px; width:202px; height:78px; z-index:11"><img border=0 width="100%" height="100%" alt="" src="images/roundrect8060031.png"></div>

<div id="text8" style="position:absolute; overflow:hidden; left:70px; top:607px; width:148px; height:57px; z-index:12">
<div class="wpmd">
<div><font color="#808080" face="Tahoma"><B>Others</B></font></div>
<div><font color="#808080" face="Tahoma"> </font></div>
<UL>
<li><font color="#808080" face="Tahoma"><a href="tips.html" class="style1" style="color:#000;">Tips for citizens </a> </font></li>
<li><font color="#808080" face="Tahoma"><a href="links.html" class="style1" style="color:#000;">Related Links</a></font></li>
</UL>
<div><font color="#808080" face="Tahoma"><BR></font></div>
<div><font color="#808080" face="Tahoma"><BR></font></div>
</div></div>

<div id="image1" style="position:absolute; overflow:hidden; left:24px; top:7px; width:734px; height:136px; z-index:13"><img src="images/hed.jpg" alt="" title="" border=0 width=734 height=136></div>

<div id="slideshow1" style="position:absolute; overflow:hidden; left:555px; top:204px; width:182px; height:221px; z-index:14">
<script type="text/javascript">
AC_RunFlashContent('width','182','height','221','quality','high','autoplay','true','loop','true','wmode','opaque','FlashVars','bcastr_xml_url=images//slideshow8060031.xml&AutoPlayTime=6&TitleBgColor=0x99CC00','codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab','pluginspage','http://www.macromedia.com/go/getflashplayer','src','images//bcastr31.swf');
</script>
<noscript>
<object width=182 height=221 classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab">
<param name="movie" value="images//bcastr31.swf">
<param name="quality" value="high">
<param name="loop" value="true">
<param name="wmode" value="opaque">
<param name="autoplay" value="true">
<param name="FlashVars" value="bcastr_xml_url=images//slideshow8060031.xml&AutoPlayTime=6&TitleBgColor=0x99CC00">
<embed src="images//bcastr31.swf" width=182 height=221 quality="high" TYPE="application/x-shockwave-flash" wmode="opaque" FlashVars="bcastr_xml_url=images//slideshow8060031.xml&AutoPlayTime=6&TitleBgColor=0x99CC00" loop="true" autoplay="true" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
</object>
</noscript>
</div>


<div id="html1" style="position:absolute; overflow:hidden; left:272px; top:201px; width:274px; height:274px; z-index:15">

<form action="redirect.php" method="post" name="adminlogin">
<fieldset style=" width:220px" > <legend style=" color:#09C ">Admin Login</legend>

S.H.O Id <input name="shoID" id="shoID" type="text"  size="25"><font color="#FF0000">*</font>
Password <input name="password" id="password" type="password" size="25"><font color="#FF0000">*</font>

Police station <br />
	<?php

 #</h3>include("conf.php"); session_start(); 


 error_reporting(E_ALL);

// require("conf.php");
// session_start(); 


 $con= mysql_connect("localhost","root","") or die("connect to databse is failed");
   
   $db= mysql_select_db("fir",$con) or die("database not found");
   
		 $q= mysql_query("select * from police_station") or die("Police station Query Error");

echo "<select name='Police_StationId' id='Police_StationId' style=width:width:178px;'>
    <option></option> ";
	 while($row=mysql_fetch_row($q))
	    {	echo "<option value=".$row[0].">".$row[1]."&nbsp; ".$row[2]." Section </option>";	}
	?>

 </select><font color="#FF0000">*</font>

<input type="button" value="Sign In" onClick="check()">

<p onClick="show()"><u><strong><span id="s">Forgate Password</span></strong></u></a><br></p>



<?php

if($_SESSION["invalid"]!="valid") 
{
echo"<p  id='blink'><font size=+1 color=red> ";
   echo $_SESSION["invalid"];
 
}else{	 echo "fadsf".$_SESSION["invalid"]="valid"; }
 echo "</p>";
?>


</fieldset>
</form></div>

<div id="html2" style="position:absolute; overflow:hidden; left:276px; top:500px; width:483px; height:200px; z-index:16">

<iframe src="Forgate_Password.php" id="ifr" width="95%" height="150" style="display:none">
 <p>Your browser does not support iframes.<br>
    please click here <a href="JavaScript:newPopup('Forgate_Password.php');">Forgate Password</a>
</p>
</iframe></font></div>

</div>

</body>
</html>
