<html>
<head>
    <title>Basic Banking System</title>
    <link rel="shortcut icon" href="images/cm.png">
   
	 <link rel="stylesheet" href="index_button.css">
	<style>
	button{
		background-color:#8cbed6;
	}
	body
	{
		text-align:center;
		margin:0px;
		background-image:url("images/aa.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
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
		font-family:fantasy;
	}
	li a:hover {
		background: transparent;
		background-color:#ffcccc;
	}
	.primary_btn {
	width: 250px;
  height:50px;
  display: inline-block;
  background: transparent;
 font-weight:bold;
  padding: 0px 50px;
  color: #40ff00;
  font-family: "Roboto", sans-serif;
  font-size: 14px;
  font-weight: 200;
  line-height: 48px;
  border: 2px solid yellow;
  border-radius: 15px;
  outline: none !important;
  box-shadow: none !important;
  text-align: center;
  text-transform: uppercase;
  cursor: pointer;
  transition: all 300ms linear 0s; }
  .primary_btn:hover {
     background: green;
	 color: #fff;
     }
  .primary_btn.yellow_btn {
    background: #fdbb00 !important;
    border: 1px solid #fdbb00 !important;
    color: #000000; }
    .primary_btn.yellow_btn:hover {
      background: transparent !important; }
	</style>
</head>
<body >

	<div id="header">
      
		<ul>
			<li><a href="transaction.php">Transaction History</a></li>
			<li><a href="transfer.php">Transfer Money</a></li>
			<li><a href="getdetail.php">View All User</a></li>
			<li><a href="index.php">Home</a></li>
		</ul>
</div>		
	    <h1 style="position:center; margin:40px;  padding:center; color:#f20d0d;text-shadow: 2px 2px black; font-family: Arial, Helvetica, sans-serif; font-size:67px;">World Bank</h1>
            <h2 style=" font-family:Arial, Helvetica, sans-serif; font-size: 76px;color:#ffbf00;text-shadow: 2px 2px black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Basic Banking System </h2>
    </div>
        <div id="section">
            <table>
                <tr></tr>
                <tr><br>
				<a href="getdetail.php">
               <button class="primary_btn" id="button "type="button" href="getdetail.php">View users</button>
                </a>

               
                </tr>

                <tr>        
               <br> <br> <br>
			   <a href="transfer.php">
			   <button class="primary_btn" id="button" type="button">Credit Transfer</button>
               </a>
               
               </tr>
			   
			    <tr>        
               <br> <br> <br>
			   <a href="transaction.php">
			   <button class="primary_btn" id="button" type="button">All Transaction</button>
               </a>

            </table>
    </div>
	           
</body>
</html>