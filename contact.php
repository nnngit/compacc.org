<?php
//ob_clean();
//error_reporting(0);
include "configpdo.php";
//date_default_timezone_set('Asia/Kolkata');


if (isset($_POST['csubmit'])){
	  $cname=ucwords($_POST['cname']);
	  $cmail=ucwords($_POST['cmail']);

      
	  //$dt=date_create(date("d-m-Y"));
	  //$dt=date('d-m-Y');
      //$datetime=$dt;
	  //echo $dt=date("d-m-Y");
	  //date("d-m-Y h:i:s");$datetime;
	  //echo "null";
	  //exit;
	  
	  $ctextarea=ucwords($_POST['ctextarea']);	  
 
	  $dt=$_POST['dt'];
	  $datetime=$_POST['datetime']; 
	  //echo $datetime;
	  
	 $datetime=date('Y-m-d H:i:s', strtotime($_POST['datetime']))	  ;
	  echo $datetime;
	  //exit;
	  
	  //$datetime=date('d-m-Y H:i:s'); current time stamp set in backend
	  //exit;
	  
	  
	  
	  if (($cname !="") and ($cmail !="") and ($ctextarea !="")){
		$sql="insert into contact (`datetime`,`contactname`,`emailid`,`dt`,`message`)  values('$datetime','$cname','$cmail','$dt','$ctextarea')";
		$res=$conn->query($sql);
		//echo dirname($_SERVER[PHP_SELF]);
		}
	    header('Location:'.dirname($_SERVER[PHP_SELF]));

}	


?>

<style> 
#div1css {
  //box-sizing: content-box;  
  width: 370px;
  height: 270px;
  //padding: 30px;  
  border: 15px solid brown;
  //overflow:scroll;
  background:white;
  border-radius: 25px;
}


#contactcss {
  //box-sizing: content-box;  
  position:absolute;
  background:white;
  margin-left:400px;
  width: 370px;
  height: 270px;
  //padding: 30px;  
  border: 15px solid brown;
  //overflow:scroll;
  border-radius: 25px;
}

</style>

<br>
<body background="images/contact1.jpg" >
<label style="float:left;color:#6B3B85;margin-left:10px;font-weight:bold;box-shadow: 5px 5px 10px #666;">Contact</label>

<hr>

<div>
<label><b>Follow</b></label>
<a href="http://twitter.com"><img src="images/twitter.png" alt="" width=50 height=50 border="1"  /></a>
<a href="http://fb.com"><img src="images/facebook.png" alt=""  width=50 height=50 border="1" /></a>
<a href="http://gmail.com"><img src="images/email.png" alt=""  width=50 height=50 border="1" /></a>
</div>
<hr>

<div id="contactcss" style="margin-left:500px">
      <!--<pre>--><b>
	  <br>
	  <div style="float:right">Contact</div>
	  <br><hr>
  	  <div>No.12,pushpanjali garden,</div>
	  <div>Ezhil Nagar,</div>
	  <div>Iyer Bungalow,</div>
	  <div>Madurai,</div>  
	  <div>Tamil Nadu 625014</div> 
	  <hr>
  	  <div style="float:right">Other Details</div>
	  <br>
	  <hr>
	  </b>
	  <!--</pre>-->
</div>

<div id="div1css">                         
                     
<form id="contactForm" name="contactForm"  method="post" action="contact.php">
	  <br>
  	  <div style="float:left;padding-left:2px;"><b>Date Time</b>
      <input readonly type="datetime-locale" style="border:2px solid red;font-weight:bold;color:red" id="datetime" name="datetime"  required="required" placeholder="dd-mm-yyyy H:m" />                  
	  </div>

	  <div style="float:right">
	  <b>Contact Form</b></div>
	  <br><hr>
	  
	  
	  
      <div style="display:none"><b>Date</b><br>
      <input type="date"  id="dt" name="dt"  required="required" placeholder="dd-mm-yyyy" />                  
	  </div>
	  

      <div><b>Name</b><br>
	  <input type="text"  id="cname" name="cname"  required="required" placeholder="Name"  />                  
	  </div>

	  <div><b>Email Id</b><br>
	  <input type="email"  id="cmail" name="cmail" required="required" placeholder="Email Id" />
      </div>
      <div><b>Message</b></br>
      <textarea  placeholder="Message" name="ctextarea" id="ctextarea" cols="50" rows="3"></textarea>
      </div>
	  <br>
      <button type="submit" id="csubmit"  name="csubmit" >Send feedback</button><br>
</form>
</div>                 
<!--<tr>
<td align="left"><span class="bottomlinks-11">Follow us :</span> <img src="social-networking.png" alt="" width="57" height="16" border="0" usemap="#Map2" style="padding-top : 5px;" onmouseover=fn1(event) /></td>
</tr>


<!--source frame get from maps.google.com search settings iframe-->
<hr>
<label><b>Map Location</b></label>
<hr>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.6343633248975!2d78.13417621479391!3d9.964347792875603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c7ab0c9b0dcd%3A0x7b7c53df363977fb!2sMYB%20Software!5e0!3m2!1sen!2sin!4v1580267093605!5m2!1sen!2sin" width="1000" height="400" frameborder="1" style="border:51;" allowfullscreen=""></iframe>
<hr>

</body>


<script>
document.getElementById("cname").focus();
document.getElementById("dt").valueAsDate=new Date();


//var datetime =  new Date() + " " + new Date().timeNow();
//alert(new Date());
//alert("dasdsa");

let current_datetime = new Date();
let formatted_date = current_datetime.getDate() + "-" + (current_datetime.getMonth() + 1) + "-" + current_datetime.getFullYear()+ " " + current_datetime.getHours() + ":" + current_datetime.getMinutes() + ":" + current_datetime.getSeconds() 
//let formatted_date = current_datetime.getDate() + "-" + (current_datetime.getMonth() + 1) + "-" + current_datetime.getFullYear()
//document.getElementById("datetime").value=new Date().toLocaleString();
//alert(Date.now());
document.getElementById("datetime").value=formatted_date;


</script>

