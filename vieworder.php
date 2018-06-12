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
	td:nth-of-type(2):before { content: "Phone Number"; }
	td:nth-of-type(3):before { content: "Location"; }	
	td:nth-of-type(4):before { content: "Item1"; }
	td:nth-of-type(5):before { content: "Quantity1"; }
	td:nth-of-type(6):before { content: "Item2"; }	
	td:nth-of-type(7):before { content: "Quantity2"; }
	td:nth-of-type(8):before { content: "Item3"; }
	td:nth-of-type(9):before { content: "Quantity3"; }
    td:nth-of-type(10):before { content: "Item4"; }
	td:nth-of-type(11):before { content: "Quantity4"; }	
    td:nth-of-type(12):before { content: "Discription"; }
	td:nth-of-type(13):before { content: "By"; }
    td:nth-of-type(14):before { content: "Date"; }
    td:nth-of-type(15):before { content: "ID"; }
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
        <h1>Order Details</h1>
        <p class="lead"><a href="../index.html"><button class="btn btn btn-success">Home</button></a> <a href="index.php"><button class="btn btn-primary">Take order</button></a> <a href="viewclients.php"><button class="btn btn-warning">View Clients</button></a> <a href="client.php"><button class="btn btn-info">Add Client</button></a> <a href="LOGIN/logout.php"><button class="btn btn btn-failure">logout</button></a>
      </div>
    </header>

	 <table class="table1" id="mytable">
    <thead>
      <tr>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Location</th>
		<th>Item1</th>
		<th>Quantity1</th>
          <th>Item2</th>
		<th>Quantity2</th>
          <th>Item3</th>
		<th>Quantity3</th>
          <th>Item4</th>
		<th>Quantity4</th>
          <th>Discription</th>
		<th>By</th>
		<th>Date|Time</th>
		<th>ID</th>
		
      </tr>
    </thead>
    <tbody>
<?php
$sql="SELECT `id`,`sname`, `ophone`, `location`, `item1`, `quant1`, `item2`,`quant2`, `item3`,`quant3`,`item4`,`quant4`,`discription`,`otb`,`date` FROM `gstex`.`order` WHERE 1";
$result=$con->query($sql);
		   if($result->num_rows>0)
		   {
			   while($row = $result->fetch_assoc())
			   {
?>
      <tr>
        <td><?php echo $row['sname']; ?></td>
         <td><?php echo $row['ophone']; ?></td>
          <td><?php echo $row['location']; ?></td>
		   <td><?php echo $row['item1']; ?></td>
		    <td><?php echo $row['quant1']; ?></td>
		     <td><?php echo $row['item2']; ?></td>
			  <td><?php echo $row['quant2']; ?></td>
			   <td><?php echo $row['item3']; ?></td>
			    <td><?php echo $row['quant3']; ?></td>
                 <td><?php echo $row['item4']; ?></td>
                  <td><?php echo $row['quant4']; ?></td>
                   <td><?php echo $row['discription']; ?></td>
                    <td><?php echo $row['otb']; ?></td>
                     <td><?php echo $row['date']; ?></td>
                      <td><?php echo $row['id']; ?></td>
			   
      </tr>
<?php
		   }}
?>     
    </tbody>
  </table>
</body>
