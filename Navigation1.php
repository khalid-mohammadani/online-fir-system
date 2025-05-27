<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

echo $navigationId=$_GET["navigationId"];
//echo "Actually value ".$navigationId=2;

//echo "<br> that ascii code ".ord($navigationId)."<br>";

$t=(ord($navigationId)+ord(10));

echo $t;

//echo " <br>2nd ascii ".(($t)-ord(10));
echo "<br> ";


switch($t)
{
	case 98:
  header("Location:Navigation.php?&navigationId=".$t."&user=geust");
break;

case 99:
  header("Location:Navigation.php?&navigationId=".$t."&user=geust");
break;

case 100:
  header("Location:Navigation.php?&navigationId=".$t."&user=geust");
break;


case 101:
  header("Location:Navigation.php?&navigationId=".$t."&user=geust");
break;

case 102:
  header("Location:Navigation.php?&navigationId=".$t."&user=geust");
break;


case 103:
  header("Location:Navigation.php?&navigationId=".$t."&user=geust");
break;



}

//base64_encode() base64_decode()

?>


</body>
</html>