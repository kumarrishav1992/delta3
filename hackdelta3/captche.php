<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>CAPTCHE PAGE</title>
</head>
<body background="bc.jpg">
<script>
function cap()
{
var b="";
var letter="0123456789abcdfghijkmnpqrstvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"
for(var a=0;a<7;a++)
b=b.concat(letter[(Math.floor(Math.random()*62))]);
document.getElementById("err4").innerHTML=b;
var c;
window.c=b;
}
function capt()
{
var aa=form.text.value;
if (aa==window.c)
return true;
else
{
alert("TRY AGAIN! WRONG CAPTCHE ENTERED");
location.reload();
return false; 
}
}
</script>
<h3 style="position:absolute; left:510px; top:140px;color:green;">!!!!ENTER THE CaPtChE  TO LOGIN!!!!</h3>
<div id="div" style="position:absolute; left:630px; top:200px;">
<div id ="err4" style="font-family:arial;color:blue;font-size:20px;"></div>
</div>
<div id="div" style="position:absolute; left:600px; top:250px;">
<form name="form" action="task3hack.php" method="post" onsubmit="return capt()">
<input type="text" name="text" placeholder="Enter The Captche"></br>
<input type="button" style="background-color:pink"  value="LOAD THE CAPCHE" onclick="cap()"></br>
<input type="submit" value="SUBMIT" style="background-color:yellow">
</form>
</div>
</body>
<html>