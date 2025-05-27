// JavaScript Document

function Act(str)
{
var xmlhttp;

function ShowAct(sttr)
	{ 
		xmlhttp=GetXmlHttpObject();
		if (xmlhttp==null)
  		{
  			alert ("Browser does not support HTTP Request");
 			 return;
  		}
		var url="Act_No.php";
		url=url+"?q="+sttr;
		url=url+"&sid="+Math.random();
		xmlhttp.onreadystatechange=stateChanged;
		xmlhttp.open("GET",url,true);
		xmlhttp.send(null);
	
	}

	function stateChanged()
	{
		
		if (xmlhttp.readyState==4)
		{
				document.getElementById("act").innerHTML=xmlhttp.responseText;
		}
	}

	function GetXmlHttpObject()
	{
		if (window.XMLHttpRequest)
		  {
			  // code for IE7+, Firefox, Chrome, Opera, Safari
			  return new XMLHttpRequest();
		  }
		if (window.ActiveXObject)
  		{  // code for IE6, IE5
			  return new ActiveXObject("Microsoft.XMLHTTP");
  		}
	return null;

}

ShowAct(str);
}




function incharge(str)
{
var xmlhttp;

function ShowIncharge(str)
	{ 
		xmlhttp=GetXmlHttpObject();
		if (xmlhttp==null)
  		{
  			alert ("Browser does not support HTTP Request");
 			 return;
  		}
		var url="incharge.php";
		url=url+"?q1="+str;
		url=url+"&sid="+Math.random();
		xmlhttp.onreadystatechange=stateChanged;
		xmlhttp.open("GET",url,true);
		xmlhttp.send(null);
	
	}

	function stateChanged()
	{
		
		if (xmlhttp.readyState==4)
		{
				document.getElementById("incharge").innerHTML=xmlhttp.responseText;
		}
	}

	function GetXmlHttpObject()
	{
		if (window.XMLHttpRequest)
		  {
			  // code for IE7+, Firefox, Chrome, Opera, Safari
			  return new XMLHttpRequest();
		  }
		if (window.ActiveXObject)
  		{  // code for IE6, IE5
			  return new ActiveXObject("Microsoft.XMLHTTP");
  		}
	return null;

}

ShowIncharge(str);
}


