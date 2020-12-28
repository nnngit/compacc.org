<br>
<body background="images/contact.jpg"  >
<label style="float:left;color:#6B3B85;margin-left:10px;font-weight:bold;box-shadow: 5px 5px 10px #666;">Home</label>
<hr>
<br>
<div style="border:5px solid red;border-radius:15px;color:white;background:#6B3B85;width:1170;height:40"
>abc company is a global leader in providing solutions for web and mobile development. We have often been asked what is abc means, well we would like to keep the puzzle unsolved, till we sit together to have a cup of coffee. We ensure our clients with great levels of certainty and satisfaction of their projects. </div>
</body>	

<div id="outPutContainer" style="width:1140;height:100"></div>
   <div id="contentDiv" style="display:none">abc company is a global leader in providing solutions for web and mobile development. We have often been asked what is abc means, well we would like to keep the puzzle unsolved, till we sit together to have a cup of coffee. We ensure our clients with great levels of certainty and satisfaction of their projects. 
   </div>



					
<script>					
function printSentence(inner, outer, index, speed) {
    var input = document.getElementById(inner).innerHTML;
    var timer = setInterval(function(){
       document.getElementById(outer).innerHTML+=input.charAt(index);
       index++;
        if(index  == sentence.length -1){
            printResume(inner, outer, index+1, speed);
        }else{
           clearInterval(timer);
        }
    }, speed);
}

printSentence("contentDiv", "outPutContainer", 0, 100);
</script>					
					
