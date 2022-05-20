<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbase = 'user';

$conn = new MySQLi ($servername, $username, $password, $dbase);

// so lets check to make sure there is a connection and output an error message if otherwise
if ($conn->connect_error){
	die ("Unable to connect: ". $dbconn->connect_error);
	}

// In the above code, the die() function kills the script when there is no connection 

// Now for the fun part. We will carry out an SQL query using an inner join, this would query
// our tables and return results from the 3 tables. 

$sql = "SELECT customer.customerid, customer.name, orders.orderid, shipping.location
		FROM customer
		INNER JOIN orders ON customer.customerid = orders.orderid
		INNER JOIN shipping ON customer.customerid = shipping.shippig_id";
		
       //$result = $dbconn ->query($sql);
	   $result = $conn->query($sql);
	   
	   echo ("<table>
			  <tr>
				<th>Customer ID</th>
				<th>Name</th>
				<th>Order ID</th>
				<th>Location</th>
			  </tr>");
	  
	   if($result->num_rows > 0){
		   
		  while ($row = $result->fetch_array()){
				$dbcusid = $row['customerid'];
				$dbcusname = $row['name'];
				$dborderid = $row['orderid'];
				$dblocation = $row['location'];
				
				echo ("
			  <tr>
				<td>$dbcusid</td>
				<td>$dbcusname</td>
				<td>$dborderid</td>
				<td>$dblocation</td>
				
				</tr>
				
		       ");

			} 
	   }
		
//When we view the results on the browser we get what is similar to the picture below 
// [show picture]


// To make the tables more appealing we would throw in a little bit of css but in preparation
// for that we need add some HTML below
// [add html code here]

// Now let's create our style.css file and throw in our css
// [add css code here]
?>

<!DOCTYPE html>
<html>
<head>

<link href="style.css" rel="stylesheet">
</head>
<body>

</body>
</html>