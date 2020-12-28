<?php
//echo "get values";
//if (isset($_GET['csubmit']))
{
//echo $_GET['cname'];
//echo $_GET['cmail'];
//echo $_GET['ctextarea'];
//header('Location:index.php');
}
?>
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
    background: #EEA5D2;
}
.dot1 {
  cursor: pointer;
  height: 35px;
  width: 210px;
  margin: 0 2px;
  background-color:#6B3B85;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 6.6s ease;
  padding-top:20;border:2px solid lightgreen;
  color:cyan;
}


/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    //padding: 20px;
    background: #EEA5D2;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 35px;
  width: 210px;
  margin: 0 2px;
  background-color: #D095D9; //#bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  padding-top:20;border:2px solid red;
  color:cyan;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover,.dot1:hover {
  background-color: deeppink; //#717171;
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
  <!--window.location.href='contact.php'-->
  <span class="dot" onclick="currentSlide(3)">Contact</span> 
  <span class="dot" onclick="currentSlide(4)">About</span> 
  <span class="dot" onclick="currentSlide(5)">Home</span> 
  <span class="dot" onclick="currentSlide(6)">Contact</span> 
</div>


<div class="slideshow-container" >
<div class="mySlides" id=slide1>
  <q>Slide 1</q>
  <p class="author">- John Keats</p>
  <?php include "home.php"; ?>
</div>

<div class="mySlides">
  <q>Slide 2</q>
  <p class="author">- Ernest Hemingway</p>
</div>

<div class="mySlides">
  <q>Slide 3</q>
  <p class="author">- Thomas A. Edison</p>
  <?php include "contact.php"; ?>
</div>

<div class="mySlides" id=slide4>
  <q>Slide 4</q>
  <p class="author">- Thomas A. Edison</p>
</div>



<div class="mySlides" id=slide5>
  <q>slide 5<?php //include "contact.html"; ?>
  </q>
</div>                 

<div class="mySlides" id=slide6>
  <q>slide 6</q>
  <p class="author">- Thomas A. Edison</p>
</div>


<a class="prev" onclick="plusSlides(-1)">&lt;</a>
<a class="next" onclick="plusSlides(1)">&gt;</a>


</div>


<div class="dot-container1">
  <span class="dot1" onclick="currentSlide(1)">Home</span> 
  <span class="dot1" onclick="currentSlide(2)">News</span> 
  <span class="dot1" onclick="currentSlide(3)">Contact</span> 
  <span class="dot1" onclick="currentSlide(4)">About</span> 
  <span class="dot1" onclick="currentSlide(5)">Home</span> 
  <span class="dot1" onclick="currentSlide(6)">Contact</span> 
</div>
<p id="time"></p>

</form>
</body>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}



</script>

</body>
</html> 
