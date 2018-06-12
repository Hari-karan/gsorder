<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: LOGIN/login.php");
  exit;
}
?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8"/>

    <title> NEW CLIENT ADD </title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"></link>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css" rel="stylesheet"></link>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyBiab51ycrADPFCfGvlfLIxGnLaP3QgbC0"></script>


    <script src="jquery.placepicker.js"></script>

    <script>

      $(document).ready(function() {

        // Basic usage
        $(".placepicker").placepicker();

        // Advanced usage
        $("#advanced-placepicker").each(function() {
          var target = this;
          var $collapse = $(this).parents('.form-group').next('.collapse');
          var $map = $collapse.find('.another-map-class');

          var placepicker = $(this).placepicker({
            map: $map.get(0),
            placeChanged: function(place) {
              console.log("place changed: ", place.formatted_address, this.getLocation());
            }
          }).data('placepicker');
        });

      }); // END document.ready

    </script>

    <style>

      .placepicker-map {
        width: 100%;
        height: 300px;
      }

      .another-map-class {
        width: 100%;
        height: 300px;
      }

      .pac-container {
        border-radius: 5px;
      }
.btn-primary a{
text-decoration:none;
color:white;
}
@media 
only screen and (max-width: 1200px),
(min-device-width: 768px) and (max-device-width: 1024px)  {
.btn-primary {
margin-left:83%;
text-decoration:none;
color:white;
}
}
    </style>

  </head>

  <body>

    <header class="subhead" id="overview">
      <div class="container">
        <h1>Client Data Entry</h1>
        <p class="lead"><a href="../index.html"><button class="btn btn btn-success">Home</button></a> <a href="index.php"><button class="btn btn-primary">Take order</button></a> <a href="viewclients.php"><button class="btn btn-warning">View Clients</button></a> <a href="vieworder.php"><button class="btn btn-info">Order Details</button></a> <a href="LOGIN/logout.php"><button class="btn btn btn-failure">logout</button></a>
      </div>
    </header>
		 <div class="container">

<form class="well form-horizontal"   id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Client Data Entry!</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Shop Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="sname"  name="sname" placeholder="Shop Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Office-Number</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input id="ophone" name="ophone" placeholder="Office Number" class="form-control"  type="text">
    </div>
  </div>
</div>
    
    <!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Email</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input id="email" name="email" placeholder="email" class="form-control"  type="text">
    </div>
  </div>
    </div>
    
    <!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Name(manager)</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="mname" name="mname" placeholder="Name" class="form-control"  type="text">
    </div>
  </div>
</div>
    
    <!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Mobile-Number</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input id="mphone" name="mphone" placeholder="Mobile Number" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

 <div class="form-group">
  <label class="col-md-4 control-label">Location</label>  
    <div class="col-md-3 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input   class="placepicker form-control col-md-2" placeholder="Enter a location" name="location" id="location"/>
 </div>
    </div>
	  <button class="btn btn-primary"><a href="fin.html">Map</a></button>
  </div>
    
        
    
    
    <!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Address</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <textarea rows="4" cols="50" id="address" name="address" placeholder="Address" class="form-control"  type="text"></textarea>
    </div>
  </div>
</div>
    <!-- Text input-->
      


    


<!-- Success message -->
<div id="clientadd"></div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="button" onclick="dataentry()" class="btn btn-warning" >Store <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>
</fieldset>
</form>
</div>
    <!-- /.container -->
  </body>
  <script type="text/javascript">
  function dataentry(){
               var ajaxRequest; 
               
               try {
                 
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                       
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
          
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('clientadd');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }   
              
               
               var name=document.getElementById('sname').value;
			   var queryString="?sname="+name;
			   var phone=document.getElementById('ophone').value;
			    queryString=queryString+"&ophone="+phone;
               var email=document.getElementById('email').value;
			    queryString=queryString+"&email="+email;
			   var mname=document.getElementById('mname').value;
			   queryString=queryString+"&mname="+mname;
			   var mphone=document.getElementById('mphone').value;
			    queryString=queryString+"&mphone="+mphone;
			   var location=document.getElementById('location').value;
			    queryString=queryString+"&location="+location;
			   var address=document.getElementById('address').value;
			    queryString=queryString+"&address="+address;
				
				
			  			   
				alert(queryString);
               ajaxRequest.open("GET", "clientdataadd.php" + queryString, true);
			   
               ajaxRequest.send(null);     
			   
			  $('#contact_form')[0].reset();  
            }
</script>

  
</html>
