<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: LOGIN/login.php");
  exit;
}
?>


<html lang="en">
<head>
  	<meta charset="UTF-8">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<title>Order Details</title>
</head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #27bed6;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
@media 
only screen and (max-width: 1200px),
(min-device-width: 768px) and (max-device-width: 1024px)  {


	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	

	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
	font-size:40px;
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 40%; 
	}
	.form-control
	{
		font-size:20px;
	}
	.btn{
		font-size:30px;
	}
	
	td:before { 
		
		position: absolute;
	
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
	}
	
	
	td:nth-of-type(1):before { content: "Shop Name"; }
	td:nth-of-type(2):before { content: "Office Number"; }
    td:nth-of-type(3):before { content: "Email"; }
	td:nth-of-type(4):before { content: "Manager"; }	
	td:nth-of-type(5):before { content: "Manager Number"; }
	td:nth-of-type(6):before { content: "Location"; }
	td:nth-of-type(7):before { content: "Address"; }	
	td:nth-of-type(8):before { content: "Date"; }
	
	
}


.table1{
	margin-top:2%;
}
</style>
<body>
<?php
include("db.php");
$date=date('Y-m-d');
?>
 <header class="subhead" id="overview">
      <div class="container">
        <h1>Client Data</h1>
        <p class="lead"><a href="../index.html"><button class="btn btn btn-success">Home</button></a> <a href="index.php"><button class="btn btn-primary">Take order</button></a> <a href="client.php"><button class="btn btn-warning">Add Client</button></a> <a href="vieworder.php"><button class="btn btn-info">Order Details</button></a> <a href="LOGIN/logout.php"><button class="btn btn btn-failure">logout</button></a>
      </div>
    </header>

	 <table class="table1" id="mytable">
    <thead>
      <tr>
        <th>Name</th>
        <th>Office Number</th>
        <th>Email</th>
        <th>Manager</th>
		<th>Manager Number</th>
		<th>Location</th>
          <th>Address</th>
		<th>Date|Time</th>
          <th>ID</th>
        
		
      </tr>
    </thead>
    <tbody>
<?php
$sql="SELECT `id`,`sname`, `ophone`,`email`, `mname`, `mphone`, `location`, `address`,`date` FROM `gstex`.`client` WHERE 1";
$result=$con->query($sql);
		   if($result->num_rows>0)
		   {
			   while($row = $result->fetch_assoc())
			   {
?>
      <tr>
        <td><?php echo $row['sname']; ?></td>
         <td><?php echo $row['ophone']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['mname']; ?></td>
		   <td><?php echo $row['mphone']; ?></td>
		    <td><?php echo $row['location']; ?></td>
		     <td><?php echo $row['address']; ?></td>
			  <td><?php echo $row['date']; ?></td>
			   <td><?php echo $row['id']; ?></td>
			   
      </tr>
<?php
		   }}
?>     
    </tbody>
  </table>
</body>
