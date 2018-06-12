<!DOCTYPE HTML>

<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: LOGIN/login.php");
  exit;
}
?>

<html>
  <head>
    <meta charset="utf-8"/>

    <title>NEW ORDER</title>
      <link href="LOGIN/images/img-01.png" rel="shortcut icon">

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
        <h1>ORDER RECORD</h1>
        <p class="lead"><a href="../index.html"><button class="btn btn btn-success">Home</button></a> <a href="client.php"><button class="btn btn-primary">Client Add</button></a> <a href="viewclients.php"><button class="btn btn-warning">View Clients</button></a> <a href="vieworder.php"><button class="btn btn-info">Order Details</button></a> <a href="LOGIN/logout.php"><button class="btn btn btn-failure">logout</button></a>
      </div>
    </header>
		 <div class="container">

<form class="well form-horizontal"   id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Order Data Entry!</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Shop Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="sname"  name="sname" placeholder="Shop Name" class="form-control"  type="text" required>
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Office-Number</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input id="ophone" name="ophone" placeholder="Office Number" class="form-control"  type="text" required>
    </div>
  </div>
</div>
    

<!-- Text input-->

 <div class="form-group">
  <label class="col-md-4 control-label">Location</label>  
    <div class="col-md-3 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input   class="placepicker form-control col-md-2" placeholder="Enter a location" name="location" id="location"/ required>
 </div>
    </div>
	  <button class="btn btn-primary"><a href="fin.html">Map</a></button>
  </div>
    
    <!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Item-1</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input id="item1" name="item1" placeholder="Item Name" class="form-control"  type="text">
  <input id="quant1" name="quant1" placeholder="Quantity" class="form-control"  type="text">
    </div>
  </div>
    
</div>    
    
      <!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Item-2</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input id="item2" name="item2" placeholder="Item Name" class="form-control"  type="text">
  <input id="quant2" name="quant2" placeholder="Quantity" class="form-control"  type="text">
    </div>
  </div>
    
</div>    
    
      <!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Item-3</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input id="item3" name="item3" placeholder="Item Name" class="form-control"  type="text" value="NULL">
  <input id="quant3" name="quant3" placeholder="Quantity" class="form-control"  type="text" value="NULL">
    </div>
  </div>
    
</div>    
    
      <!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Item-4</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input id="item4" name="item4" placeholder="Item Name" class="form-control"  type="text" value="NULL">
  <input id="quant4" name="quant4" placeholder="Quantity" class="form-control"  type="text" value="NULL">
    </div>
  </div>
    
</div>    
    
    
    
    
    <!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Discription</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <textarea rows="4" cols="50" id="discription" name="discription" placeholder="If any" class="form-control"  type="text"></textarea>
    </div>
  </div>
</div>
    
    <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Order taken by</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input id="otb"  name="otb" placeholder="Your Name" class="form-control"  type="text" required>
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
			   var location=document.getElementById('location').value;
			    queryString=queryString+"&location="+location;
      //item pair 1-----------------------------------------------------------------------------
			   var item1=document.getElementById('item1').value;
			    queryString=queryString+"&item1="+item1;
               var quant1=document.getElementById('quant1').value;
			    queryString=queryString+"&quant1="+quant1;
      //----------------------------------------------------------------------------------------
      //item pair 2-----------------------------------------------------------------------------
			   var item2=document.getElementById('item2').value;
			    queryString=queryString+"&item2="+item2;
               var quant2=document.getElementById('quant2').value;
			    queryString=queryString+"&quant2="+quant2;
      //----------------------------------------------------------------------------------------
      //item pair 3----------------------------------------------------------------------------
			   var item3=document.getElementById('item3').value;
			    queryString=queryString+"&item3="+item3;
               var quant3=document.getElementById('quant3').value;
			    queryString=queryString+"&quant3="+quant3;
      //----------------------------------------------------------------------------------------
      //item pair 4----------------------------------------------------------------------------
			   var item4=document.getElementById('item4').value;
			    queryString=queryString+"&item4="+item4;
               var quant4=document.getElementById('quant4').value;
			    queryString=queryString+"&quant4="+quant4;
      //----------------------------------------------------------------------------------------
                var discription=document.getElementById('discription').value;
			    queryString=queryString+"&discription="+discription;
      
                var otb=document.getElementById('otb').value;
			    queryString=queryString+"&otb="+otb;
      
				
				
			  			   
				alert(queryString);
               ajaxRequest.open("GET", "orderadd.php" + queryString, true);
			   
               ajaxRequest.send(null);     
			   
			  $('#contact_form')[0].reset();  
            }
</script>

  
</html>
