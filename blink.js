// JavaScript Document


function blinklink()
{

document.getElementById('blink').style.background="#CCC";

if (!document.getElementById('blink').style.color)
	{
	document.getElementById('blink').style.color="red";
	}
	
if (document.getElementById('blink').style.color=="red")
	{
	document.getElementById('blink').style.color="blue";
	}


if (document.getElementById('blink').style.color=="blue")
	{
	document.getElementById('blink').style.color="green";
	}
else
	{
	document.getElementById('blink').style.color="red";
	}

timer=setTimeout("blinklink()",300);
}

function stoptimer()
{
   clearTimeout(timer);
}

