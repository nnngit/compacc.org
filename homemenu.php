<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  


<style>
.menubar{
	cursor:pointer;
//font-size:21px;
//color:green;
//border:3px solid deepskyblue;
background-color:#FF0080;
//border-width:15px;
color:white;
	//background:green;
	border-style:dashed;
}
.headbar{border:1px solid deeppink; }

</style>

<script type="text/javascript" language="javascript" src="js/jquery-1.12.4.js">	</script>

<br>


<body background="images/bgnote.jpg"  >
<form  method=post>
<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--<div class="w3-container w3-center w3-animate-zoom">-->
<div id=mm1 style="margin-left:100px" >
	

<br>
<hr class=headbar >
<h3  class=menubar ><marquee direction=right>COMPACC'S WEBSITE</marquee></h3>
<hr class=headbar />

<div id=d1 style="height:36px;border:1px solid deeppink;background-color:white;visibility:hidden;display:none">
  <input name=3db1 id=3db1 style="cursor:pointer;width:98px;height:42px;background:url(images/addbank.png) no-repeat;border:none"  onmouseover=fnmover(this) onmouseleave=fnmleave(this) onClick="window.location.href = 'abboat.php';"></input>
  <input id=3db2 style="border:none;cursor:pointer;width:98px;height:42px;background:url(images/addbranch.png) no-repeat ;" onClick="window.location.href = 'abrboat.php'" onmouseover=fnmover(this) onmouseleave=fnmleave(this) ></input>
  <!--<input id=3db3 style="border:none;cursor:pointer;width:104px;height:42px;background:url(images/report.png) no-repeat ;" onclick="fnclick('re');" onmouseover=fnmover(this) onmouseleave=fnmleave(this) ></input>
  <input id=3db4 style="border:none;cursor:pointer;width:104px;height:42px;background:url(images/query.png) no-repeat ;" onclick="fnclick('qu');" onmouseover=fnmover(this) onmouseleave=fnmleave(this) ></input>-->
</div>

<div class=menubar onclick="window.location.href='home.html'" style="text-shadow: 2px 2px black;text-align:center;">
Home &nbsp;&nbsp;<button style=color:black onmouseover=fn1("home")>&#x25BA;</button></div>


<br>
<div  class=menubar  onclick='fndiv("d2");' style="text-shadow: 2px 2px black;text-align:center">About&nbsp;&nbsp;&#x25BA;</div>
<div id=d2 style="height:36px;border:1px solid deeppink;background-color:white;visibility:hidden;display:none">
   <button  id=3db1 style="cursor:pointer;width:119px;height:42px;background:url(images/adddriver.png) no-repeat;border:none" onClick="window.location.href = 'adriverboat.php'" onmouseover=fnmover(this) onmouseleave=fnmleave(this) ></button>
  <button id=3db2 style="border:none;cursor:pointer;width:119px;height:42px;background:url(images/addvehicle.png) no-repeat ;" onClick="window.location.href = 'avehicleboat.php'" onmouseover=fnmover(this) onmouseleave=fnmleave(this) ></button>
  <!--<button id=3db3 style="border:none;cursor:pointer;width:104px;height:42px;background:url(images/report.png) no-repeat ;" onclick="fnclick('re');" onmouseover=fnmover(this) onmouseleave=fnmleave(this) ></button>
  <button id=3db4 style="border:none;cursor:pointer;width:104px;height:42px;background:url(images/query.png) no-repeat ;" onclick="fnclick('qu');" onmouseover=fnmover(this) onmouseleave=fnmleave(this) ></button>-->
</div>

<br>
<div  class=menubar style="text-shadow: 2px 2px black;text-align:right">Services&nbsp;&nbsp;<button style=color:black onmouseover=fn1()>&#x25BA;</button>&nbsp;&nbsp;</div>
<br>
<div  class=menubar style="text-shadow: 2px 2px black;text-align:right">Chat Online&nbsp;&nbsp;&#x25BA;&nbsp;&nbsp;</div>
<br>
<div  class=menubar style="text-shadow: 2px 2px black;" onclick="window.location.href='contact.html'" >&nbsp;&nbsp;Contact & Follow&nbsp;&nbsp;
<button style=color:black onmouseover=fn1("contact")>&#x25BA;</button>
</div>
<br>
<div class=menubar style="text-shadow: 2px 2px black;">&nbsp;&nbsp;Settings&nbsp;&nbsp;<button style=color:black onmouseover=fn1()>&#x25BA;</button></div>
<br>
<hr class=headbar >
<h3  class=menubar ><marquee>COMPACC'S WEBSITE</marquee></h1>
<hr class=headbar />
</div>

</form>
</body>

<script>
function fn1(lpv1)
{
v1=document.getElementById("d1").style.visibility;
if (v1=="visible") {
	document.getElementById("d1").style.visibility="hidden";
	document.getElementById("d1").style.display="none";
	} 	
else 
	{	
	document.getElementById("d1").style.visibility="visible";
	document.getElementById("d1").style.display="block";	
	}

	if (lpv1=="home"){
		document.getElementById("d1").innerHTML="Home Page";
		//document.getElementById("slide1").innerHTML="Home Page";
		currentSlide(1);
	}
	if (lpv1=="contact"){
		document.getElementById("d1").innerHTML="Contact & Follow Page";
		//document.getElementById("slide5").innerHTML="Contact & Follow Page";
		currentSlide(5);
		}

}

function fndiv(pv1)
{
v1=document.getElementById(pv1).style.visibility;
if (v1=="visible") {
	document.getElementById(pv1).style.visibility="hidden";
	document.getElementById(pv1).style.display="none";
	} 	
else 
	{	
	document.getElementById(pv1).style.visibility="visible";
	document.getElementById(pv1).style.display="block";	
	}
}

function fnmover(v)
{
v.style.border="6px groove deeppink";
}
function fnmleave(v)
{
v.style.border="none";
}

            $("#mm1").animate({
                width:0
            },5000);


            $("#mm1").animate({
                width: screen.width-200
            },5000);


	
</script>





<html>
<style>
/* Slideshow container */
.slideshow-container {
  position: relative;
  background:  #ff7ebf; 
}

/* Slides */
.mySlides {
  display: none;
  padding: 10px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #6B3B85;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}
</style>


<head>
</head>
<body>

<div class="slideshow-container" >
<div class="mySlides" id=slide1>
  <q>Slide 1</q>
  <p class="author">- John Keats</p>
</div>

<div class="mySlides">
  <q>Slide 2</q>
  <p class="author">- Ernest Hemingway</p>
</div>

<div class="mySlides">
  <q>Slide 3</q>
  <p class="author">- Thomas A. Edison</p>
</div>

<div class="mySlides" id=slide4>
  <q>Slide 4</q>
  <p class="author">- Thomas A. Edison</p>
</div>

<div class="mySlides" id=slide5>
  <q>slide 5</q>
  <p class="author">- Thomas A. Edison</p>
</div>

<div class="mySlides" id=slide6>
  <q>slide 6</q>
  <p class="author">- Thomas A. Edison</p>
</div>

<a class="prev" onclick="plusSlides(-1)">&lt;</a>
<a class="next" onclick="plusSlides(1)">&gt;</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)" ondblclick="window.location.href='home.html'"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)" ondblclick="window.location.href='contact.html'" ></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 

</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
