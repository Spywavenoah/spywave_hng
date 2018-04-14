<!DOCTYPE html>
<html>
<head>
<title>Spywaven HNG</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  width: 100%;
}

.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #4CAF50;
  color: white;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: right;
  }
  .footer{
  	width: 100%; height: 30px; background-color: black;text-align: center;margin-bottom: 0px;
  }
  .big-pix{
  	width: 100%;
  	/*height: 40*/
  }
}
</style>
<script type="text/javascript">
  function date_time(id)
{
        date = new Date;
        year = date.getFullYear();
        month = date.getMonth();
        months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
        d = date.getDate();
        day = date.getDay();
        days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        h = date.getHours();
        if(h<10)
        {
                h = "0"+h;
        }
        m = date.getMinutes();
        if(m<10)
        {
                m = "0"+m;
        }
        s = date.getSeconds();
        if(s<10)
        {
                s = "0"+s;
        }
        result = ''+days[day]+' '+months[month]+' '+d+' '+year+','+' '+h+':'+m+':'+s;
        document.getElementById(id).innerHTML = result;
        setTimeout('date_time("'+id+'");','1000');
        return true;
}


</script>
<script>

var x,y,n=0,ny=0,rotINT,rotYINT
function rotateDIV()
{
x=document.getElementById("rotate2D")
clearInterval(rotINT)
rotINT=setInterval("startRotate()",10)
}
function rotateYDIV()
{
y=document.getElementById("rotate3D")
clearInterval(rotYINT)
rotYINT=setInterval("startYRotate()",10)
}
function startRotate()
{
n=n+1;
x.style.transform="rotate(" + n + "deg)"
x.style.webkitTransform="rotate(" + n + "deg)"
x.style.OTransform="rotate(" + n + "deg)"
x.style.MozTransform="rotate(" + n + "deg)"
if (n==+180 || n==360)
  {
//  clearInterval(rotINT)
  if (n==360){n=0;}
  }
}
function startYRotate()
{
ny=ny+1;
y.style.transform="rotateY(" + ny + "deg)"
y.style.webkitTransform="rotateY(" + ny + "deg)"
y.style.OTransform="rotateY(" + ny + "deg)"
y.style.MozTransform="rotateY(" + ny + "deg)"
if (ny==180 || ny>=360)
  {
//  clearInterval(rotYINT)
  if (ny>=360){ny=0}
  }
}
//
</script>
</head>
<body>

<div class="topnav" id="myTopnav">
<span><strong style="font-size: 30px; text-align: center; color: white; margin: 20px;padding-top: 10px">Spywave</strong></span>
  <a href="#Contact">Contact Us</a>
  <a href="#Gallery">Gallery</a>
  <a href="#About Us">About Us</a>
  <a href="#home" class="active">Home</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<div style="background-color: #4CAF50; text-align: center; color:white;">
<img src="images/img_lights_wide.jpg" width="100%" height="300px">

  <h2 style="color: darkorange; margin-top: 1px; padding-top: 1px;">Quote of The day</h2>
  <p style="padding-bottom: 5px; ">1. Unless you try to do something beyond what you have already mastered, you will never grow.<br>
   2. The important thing in science is not so much to obtain new facts as to discover new ways of thinking about them.</p>
</div>
<center>
<div onmousemove ="rotateYDIV()" id="rotate3D" style="display: inline-block; float: left; margin-left: 20px;">
<img src="images/real.png" width="100" height="120px">
  
</div>
<div style="height: 40px; text-align: center; display: inline-block;">

	<h1 style="color: red;">Current Time</h1>
	<span id="date_time" style="font-size: 38px; text-shadow: 20px; text-decoration-style: bold;"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script>
</div>
</center>
<br>
<div style="width: 100%; height: 30px; background-color: black;text-align: center;margin-bottom: 0px; color:white; margin-top: 60px;">
	Copyright <?php echo date('Y',time()); ?>
</div>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
var d = new Date();
var n = d.toLocaleTimeString();
document.getElementById('time').innHtml=n;

// window.onload{
  window.addEventListener("Load", rotateYDIV(), false);
  // window.onload = rotateYDIV();
// }
</script>

</body>
</html>
