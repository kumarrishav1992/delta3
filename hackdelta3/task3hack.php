<!DOCTYPE html>
<html>
<head>
<title>spi task</title>
<style>
div
{
color:blue;
font-family:"Palatino Linotype";
}
</style>
<script>
function root()
{
var inputs = document.getElementsByTagName('input');
    inputs[14].value="";
    inputs[13].value="";
	}
function validation()
{
var chk=0;
var x=form.uname.value;
if(x=="" || x==null )
{document.getElementById('err1').style.display = "block"; 
chk++;}
if(x.charAt(0)!= x.charAt(0).toUpperCase())
{document.getElementById('err2').style.display = "block";
chk++;}
var y=form.roll.value;
if(y.length!=10 || y=="" || y==null)
{document.getElementById('err4').style.display = "block";
chk++;}
var m=form.day.value;
var n=form.month.value;
var o=form.year.value;
if(m=="" || m==null || n=="" || n==null || o=="" || o==null || m>31 || m<01 || n>12 || n<01 || o<1985)	
{document.getElementById('err3').style.display = "block";
chk++;}
var z=form.email.value;
var atpos=z.indexOf("@");
var dotpos=z.lastIndexOf(".");
if(z=="" || z==null || atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length)
{document.getElementById('err5').style.display = "block";
chk++;}
var arr=["freecharge","online","spambot","mailinator","m8.myzamanamail","txtweb","000webhost","ig.com"];
var ch=0;
for(var i=0;i<8;i++)
{
if(z.slice(atpos+1,dotpos) == arr[i])
ch++;
}
if (ch!=0)
{document.getElementById('err11').style.display = "block";
chk++;}
var p=form.pass.value;
var letter=/\w{4,9}$/;
if(p=="" || p==null || !p.match(letter))  
{document.getElementById('err6').style.display = "block";
chk++;}
var aa=x.indexOf(" ");
if(aa==-1)
{
if(p.toUpperCase().indexOf(x.toUpperCase())!=-1)
{document.getElementById('err16').style.display = "block";
chk++;}
}
else
{
var bb=x.slice(0,aa);
var cc=x.slice(aa+1,x.length);
if(p.toUpperCase().indexOf(bb.toUpperCase())!=-1 || p.toUpperCase().indexOf(cc.toUpperCase())!=-1)
{document.getElementById('err16').style.display = "block";
chk++;}
}
var q=form.rpass.value;
if(q=="" || q==null || q !=p)
{document.getElementById('err7').style.display = "block";
chk++;}
var box=0;
if(form.delta.checked) 
box++;
if(form.rmi.checked)
box++;
if(form.spider.checked)
box++;
if(form.dance.checked)
box++;
if(form.aayam.checked)
box++;
if(box<3)
{document.getElementById('err9').style.display = "block";
chk++;} 
 var id_value = document.getElementById('pto').value;
 var id = document.getElementById('pto');
 if(id_value != '')
 { 
  var valid_extensions = /(.jpg|.jpeg|.png)$/i;   
  if(valid_extensions.test(id_value) && id.files[0].size<1024*1024)
  { }
  else
  {
   {document.getElementById('err10').style.display = "block";
   chk++;
   }
  } 
}

if (chk==0)
return true;
else 
return false;
}
function tr()
	{
    var visa_cat = form.school.value; 
  if(visa_cat == "Other School")
  document.getElementById("new_textbox").style.display="block";
  else
  document.getElementById("new_textbox").style.display="none";
  }
</script>
</head>
<body background="bc.jpg" onload="root()">
<table border="1" bordercolor="green" background="images.jpg" align ="center" style="position:absolute; left:575px; top:20px;">
<tr><td><h1><u><font color="blue" size="4" family="verdana" >REGISTRATION FORM </font></u></h1></td></tr>
</table>
<table  height="500" width="600" align="center"  background="back.jpg" style="position:absolute; left:380px; top:120px;">
<form action="validatehack.php" method="post" name="form" align="center" onsubmit="return validation()" enctype="multipart/form-data">
<tr><td>NAME:<input type="text" name="uname"/><div id ="err1" style = "display:none">*Please Fill The Name</div><div id ="err2" style = "display:none">*First Letter Should Be Capital</div></td></tr>
<tr><td>D.O.B:-<input type="tel" name="day" size="1" maxlength="2" placeholder="DD">/<input type="tel" name="month" maxlength="2" size="1" placeholder="MM">/<input type="tel" name="year" maxlength="4" size="1" placeholder="YYYY"><div id ="err3" style = "display:none">*Please Enter The D.O.B Correctly</div><div id ="err8" style = "display:none">*Please Enter Valid D.O.B </div></td></tr>
<tr><td>SEX:-<input type="radio" name="sex" value="male">male<input type="radio" name="sex" value="female">female</td></tr>
<tr><td>DEPT:-
<select name="dept">
<option>civil</option>
<option>cse</option>
<option>ece</option>
<option>mech</option>
<option>eee</option>
<option>ice</option>
<option>meta</option>
<option>arch</option>
</select></td></tr>
<tr><td>ROLL NO:-<input type="tel" name="roll" minlength="10" maxlength="10" size="15"><div id ="err4" style = "display:none">*Please Enter The 10 Digit Roll No. Correctly</div></td></tr></br></td></tr>
<tr><td>EMAIL:-<input type="text" name="email"><div id ="err5" style = "display:none">*Please Enter Valid Email I.d</div><div id ="err11" style = "display:none">*SORRY ! Entered EMAIL is blacklisted</div></td></tr></br>
<tr><td>CLUB MEMBERSHIP:-<input type="checkbox" name="delta" value="delta">Delta<input type="checkbox" name="rmi" value="rmi">Rmi<input type="checkbox" name="spider" value="spider">Spider<input type="checkbox" name="dance" value="dance">Dancetroop<input type="checkbox" name="aayam" value="aayam">Aayam<div id ="err9" style = "display:none">*At least membership of 3 clubs</div></td></tr>
<tr><td>RESIDENTIAL ADD:-<input type="text" name="add"></td></tr></br>
<tr><td>LAST SCHOOL ATTENDED:-<select name="school" onchange="tr()"><option>St. Paul</option><option>St. Joseph</option><option>M.V.M</option><option>M.I.R.S</option><option>Other School</option></select><input type="text" name="new_textbox" placeholder="Enter School Name" id="new_textbox" style="display:none;"></td></tr></br>
<tr><td>PASSWORD:-<input type="password" name="pass" minlength="5" maxlength="9"/><div id ="err6" style = "display:none">*Please Fill the Password[contains only digits,alphabets,underscore]</div><div id ="err16" style = "display:none">*password should n't contain username part</div></td></tr>
<tr><td>REPEAT PASSWORD:-<input type="password" name="rpass"><div id ="err7" style = "display:none">*Password Didn't Match</div></td></tr></br></td></tr>
<tr><td>PHOTO UPLOAD:-<input type="file" name="file" id="pto"/><div id ="err10" style = "display:none">*Please Check The format(.jpg or .png && Size<1MB) </div></td></tr>
<tr><td><input type="reset" onclick="location.reload()"></td></tr>
<tr><td><input type="submit" value="Final Submission"></td></tr>
</form>
</table>
</body>
</html>