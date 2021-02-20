<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: rgb(47,137,158);
		background-image:url("images/11b.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
		margin:0px;
	}
	html,body{
		height:80%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
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
	.center{
		display:inline-block;
		background-color:#0086b3;
		padding:50px;
		border:2px ridge red;
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:#bebebe;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #28048a;
		font-size:17px;
		font-weight:bold;
		background:#26abff;
	}
	.button:hover{
		background-color:#26abff;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Vishu"){
				 var arr=["Preyash","Ashish","Rita","Janu","Palak","Taral","Nishant","Masum","Ankita"];
				 }
				 else if(a==="Preyash"){
					var arr=["Vishu","Ashish","Rita","Janu","Palak","Taral","Nishant","Masum","Ankita"];
				}
				else if(a==="Ashish"){
					var arr=["Vishu","Preyash","Rita","Janu","Palak","Taral","Nishant","Masum","Ankita"];
				}
				else if(a==="Rita"){
					var arr=["Vishu","Preyash","Ashish","Janu","Palak","Taral","Nishant","Masum","Ankita"];
				 }
				 else if(a==="Janu"){
					var arr=["Vishu","Preyash","Ashish","Rita","Palak","Taral","Nishant","Masum","Ankita"];
				 }
				 else if(a==="Palak"){
					var arr=["Vishu","Preyash","Ashish","Rita","Janu","Taral","Nishant","Masum","Ankita"];
				 }
				 else if(a==="Taral"){
					var arr=["Vishu","Preyash","Ashish","Rita","Janu","Palak","Nishant","Masum","Ankita"];
				 }
				 else if(a==="Nishant"){
					var arr=["Vishu","Preyash","Ashish","Rita","Janu","Palak","Taral","Masum","Ankita"];
				 }
				 else if(a==="Masum"){
					var arr=["Vishu","Preyash","Ashish","Rita","Janu","Palak","Taral","Nishant","Ankita"];
				 }
				 else if(a==="Ankita"){
				 var arr=["Vishu","Preyash","Ashish","Rita","Janu","Palak","Taral","Nishant","Masum"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
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
	<h1 style=" font-size:45px;color:#e0115f;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Vishu">Vishu</option>
			<option value="Preyash">Preyash</option>
			<option value="Ashish">Ashish</option>
			<option value="Rita">Rita</option>
			<option value="Janu">Janu</option>
			<option value="Palak">Palak</option>
			<option value="Taral">Taral</option>
			<option value="Nishant">Nishant</option>
			<option value="Masum">Masum</option>
			<option value="Ankita">Ankita</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	
</body>
</html>