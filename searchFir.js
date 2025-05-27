// JavaScript Document

var xmlhttp;

function ShowFir()
	{ 
		
var Topic=document.getElementById("firTopic").value;
	
var Fir=document.getElementById("searchFir").value;
		
	
		xmlhttp=GetXmlHttpObject();
	
		if (xmlhttp==null)
  		{
  			alert ("Browser does not support HTTP Request");
 			 return;
  		}
		
	 
		var url="searchFir.php?q="+Topic+"&searchFir="+Fir;
	
		/* ur1=url+"?q="+Topic+"&searchFir="+Fir;
		 ur1=url+"&sid="+Math.random();
		*/ xmlhttp.onreadystatechange=stateChanged;
	
		 xmlhttp.open("GET",url,true);
		 xmlhttp.send(null);
 
 /* alert(Topic+Fir);
	*/
	
	}

	function stateChanged()
	{
		
		if (xmlhttp.readyState==4)
		{
				document.getElementById("searchFIR").innerHTML=xmlhttp.responseText;
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
