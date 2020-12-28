<html>
<style>
/* Slideshow container */
.slideshow-container {
  position: relative;
  background: cyan;
}

/* Slides */
.mySlides {
  display: none;
  padding: 90px;
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

.dot-container1 {
    text-align: center;
    //padding: 20px;
    background: red; 
}
.dot1 {
  cursor: pointer;
  height: 35px;
  width: 210px;
  margin: 0 2px;
  background-color:navy ;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 6.6s ease;
  padding-top:20;border:2px solid cyan;
  color:cyan;
}


/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    //padding: 20px;
    background: red; 
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 35px;
  width: 210px;
  margin: 0 2px;
  background-color: navy ;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  padding-top:20;border:2px solid cyan;
  color:cyan;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover,.dot1:hover {
  background-color: cornflowerblue; 
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}
</style>


<head>
</head>
<body>


<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)">Home</span> 
  <span class="dot" onclick="currentSlide(2)">News</span> 
  <!--window.location.href='contact.php' currentSlide(3);-->
  <span class="dot" onclick="currentSlide(3);">Contact</span> 
  <span class="dot" onclick="currentSlide(4)">About</span> 
  <span class="dot" onclick="currentSlide(5)">Product</span> 
  <span class="dot" onclick="currentSlide(6)">Location</span> 
</div>


<div class="slideshow-container" >
<div class="mySlides" >
  <q>Home 1</q>
  <p class="author">- Sl1 John Keats</p>
  <?php include "home.php"; ?>
</div>

<div class="mySlides" >
  <q>News 2</q>
  <p class="author">- Sl2 Ernest Hemingway</p>
  <?php include "news.php"; ?>
</div>

<div class="mySlides" >
  <q>Contact 3</q>
  <p class="author">- Sl3 Thomas A. Edison</p>
  <?php include "contact.php"; ?>
</div>

<div class="mySlides" >
  <q>About 4</q>
  <p class="author">- Sl4 Thomas A. Edison</p>
  <?php include "about.php"; ?>
</div>

<div class="mySlides" >
  <q>Product 5</q>
  <p class="author">- Sl5 Thomas A. Edison</p>
  <?php include "product.php"; ?>
</div>                 

<div class="mySlides" >
  <q>Location 6</q>
  <p class="author">- Sl6 Thomas A. Edison</p>
  <?php include "location.php"; ?>
</div>


<a class="prev" onclick="plusSlides(-1)">&lt;</a>
<a class="next" onclick="plusSlides(1)">&gt;</a>


</div>


<div class="dot-container1">
  <span class="dot1" onclick="currentSlide(1)">Home</span> 
  <span class="dot1" onclick="currentSlide(2)">News</span> 
  <span class="dot1" onclick="currentSlide(3)">Contact</span> 
  <span class="dot1" onclick="currentSlide(4)">About</span> 
  <span class="dot1" onclick="currentSlide(5)">Product</span> 
  <span class="dot1" onclick="currentSlide(6)">Location</span> 
</div>
<p id="time"></p>

</form>
</body>


<script>
var slideIndex = 1;
showSlides(slideIndex);


function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
  var a = document.getElementById("cname");
  if (a)  document.getElementById("cname").focus();
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
	//setTimeout(showSlides(slideIndex), 2000);
}

function showSlides1(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot1");
  if (n > slides.length) {slideIndex1 = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex1-1].style.display = "block";  
  dots[slideIndex1-1].className += " active";
}



var myVar = setInterval(myTimer ,1000);
function myTimer() {
  var d = new Date();
  document.getElementById("time").innerHTML = d.toLocaleTimeString();
}


</script>

</body>
</html> 
