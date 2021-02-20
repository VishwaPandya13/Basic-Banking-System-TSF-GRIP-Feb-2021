<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select * from mini_statement";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transaction</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="button.css">
	<style>
		
		body{
			background-image:url("images/11b.jpg");
			margin:0px;
			background-repeat: no-repeat;
			background-size:cover;
		}
		ul {
	list-style-type: none;
	margin: 0px;
	padding: 0px;
	overflow: hidden;
	background-color: #5D5C61;
	}

	li {
	float: right;
	}

	li a {
		display: block;
		color:#ff4d4d ;
		text-align: ceil;
		font-size:17px;
		background: transparent;
		padding: 20px 130px;
		text-decoration: none;
		font-family:fantasy;;
	}
	li a:hover {
		background: transparent;
		background-color:#ffcccc;
	}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-collapse:collapse;
			 background: #ffffff;
			}
		th{
			color:#2407fa;
			font-size:26px;
			font-family:Sans-serif;
			padding:16px;
		}
		
		td{
			font-size:23px;
			color: ;
			padding: 10px 20px 10px 22px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
		}
		h2{
			padding:20px;
			font-size:35px;
			color:#805a46;
			text-shadow: 1px 1px black;
			text-align:center;
		}
		.btn {
			background-color:RoyalBlue;
			border: none;
			color: white;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
		}
		.buttons{
			
			right:42%;
			text-align:center;
		}

		.btn:hover {
			background-color:  DodgerBlue;
		}
	</style>
	</head>
	<body>
		<div id="header">
      
		<ul>
			<li><a href="transaction.php">Transaction History</a></li>
			<li><a href="transfer.php">Transfer Money</a></li>
			<li><a href="getdetail.php">View All User</a></li>
			<li><a href="index.php">Home</a></li>
		</ul>
</div>		
	<br><br><br><br><br><br>
		
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>receiver</th>
				<th>Amount</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["receiver"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<form action="index.php" method="post">
			
		</form>
		
	</body>
</html>