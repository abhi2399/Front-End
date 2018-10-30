<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Food Finder</title>

<style type="text/css">

ul {
    list-style-type: none;
    margin: 0;
    /*padding:20;
    overflow: hidden;*/
}
#d2 ul a{
text-decoration:none;
}

ul li
{
font-size:20px;

padding-top:13px;
}


li {
    float: left;
	color:#FFF;
	padding-right:30px;
	
}
a{
	color:#FFF;	
	
	
}

</style>
<script type="application/javascript">
<!-->

//-->
</script>
</head>

<body bgcolor="#990000">
<br />

<div id="d1" style="height:50px; width=100%; background-color:#FFF;">
&nbsp;&nbsp;&nbsp;<img src="Capture1.PNG" style=" height:40px">
</div>

<br />


<div id="d2" style="background-color:#666; height:50px;">
	
    
    <ul>
	<li> <a href="x"  > Muglai </a> </li>
	<li><a href="x" > Thais Food </a> </li>
	<li> <a href="x" > Chinese </a> </li>
	<li> <a href="x" > Punjabi </a> </li>
    <li> <a href="x" > Snacks </a> </li>
    <li> <a href="x" > South Indian </a> </li>
    <li> <a href="x" > Continental </a> </li>
    <li> <a href="x" > Italian </a> </li>
    <li> <a href="x" > North Indian </a> </li>
    <li> <a href="x" > Pizzas </a> </li>
    
	</ul>
</div>

<br />

<center>

<div id="d3"  style=" height:550px; width:90%; background-color:#FFF; ">

<div id="d31" style="height:550px;width:95%; ">
<img src="3.jpeg" name="slide" width="100%" height="550px" />
<script type="application/javascript">
var image1=new Image()
image1.src="3.jpeg";
var image2=new Image()
image2.src="4.jpg";
var image3=new Image()
image3.src="5.jpg";

var step=1;
function slideit(){
	document.images.slide.src=eval("image"+step+".src")
	if(step<3)
	step++;
	else
	step=1;
	setTimeout("slideit()",2500)
}
slideit();
</script>
</div>
</div>
<br />
<div id="d32" style="background-color:#666; height:50px; width:90%;"> 
 <ul>
	<li>  Most Popular</li>
    </ul>

</div>
<br />
<br />


<div  id="d33" style="background-color:#FFF; height:400px;  width:90%;">
<marquee>
<table cellpadding="30px" cellspacing="30px">
<th>

<img src="4.jpg" style="height:200px; width:200px"  />
<br />
<br />
This is the first1235
<center>
<br />
<br />
<input type="button"     value="Buy Now">

</center>
</th>
<th>
<img src="4.jpg"  style="height:200px; width:200px"  />
<br />
<br />
This is the first
<center>
<br />
<br />
<input type="button"     value="Buy Now">

</center>
</th>
<th>

<img src="4.jpg"  style="height:200px; width:200px"  />
<br />
<br />
This is the second
<center>
<br />
<br />
<input type="button"     value="Buy Now">

</center>
</th>
<th>

<img src="4.jpg"  style="height:200px; width:200px"  />
<br />
<br />
This is the third
<center>
<br />
<br />
<input type="button"     value="Buy Now">

</center>
</th>
<th>

<img src="4.jpg"  style="height:200px; width:200px"  />
<br />
<br />
This is the four
<center>
<br />
<br />
<input type="button"     value="Buy Now">

</center>
</th>
<th>

<img src="4.jpg"  style="height:200px; width:200px"  />
<br />
<br />
This is the five
<center>
<br />
<br />
<input type="button"     value="Buy Now">

</center>
</th>
<th>

<img src="4.jpg"  style="height:200px; width:200px"  />
<br />
<br />
This is the six
<center>
<br />
<br />
<input type="button"     value="Buy Now">

</center>
</th>

</table>
</marquee>
</div>

</div>

</body>
</html>