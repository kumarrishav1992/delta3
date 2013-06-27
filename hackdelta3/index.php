
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>LOGIN PAGE</title>
</head>
<script type="text/javascript">
if ( window.addEventListener ) {  
  var sta = 0, konami = [38,38,40,40,37,39,37,39,66,65];  
  window.addEventListener("keydown", function(e) {  
    if ( e.keyCode == konami[sta] ) sta++;  
    else sta = 0;  
    if ( sta == 10 )  
      window.location = "http://localhost/hackdelta3/captche.php"; 
    },true);  
}  
</script>
<body background="bc.jpg">
<div id="div" style="position:absolute; left:350px; top:200px;">
<h1>HI! WELCOME TO THE REGISTRATION CENTER</h1>
<h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPERFORM THE KONAMI CODE TO LOGIN</h2>
</div>
</body>
</html>
