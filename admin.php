<html>
	<head>
		<title>adminlogin</title>
		<style>
			body
			{
				display: flex;
    				justify-content: center;
		    		align-items: center;
				background:url("bgl.jpg");		
			}
			.back-button a img
			{
				width: 60px;
    				position: fixed;
    				left: 10px;
    				top: 100px;		 	
			}
			.forward-button a img
			{
				width: 60px;
    				position: fixed;
    				left: 90px;
    				top: 100px;		 	
			}

			
			form
			{
    				display: flex;
    				flex-direction: column;
    				text-align: center;
    				border-radius: 77px 0;
    				width: 30%;
    				padding: 110px 6px;
    				color: white;
    				background: linear-gradient(45deg, #15adf8, #02e8ff);
			}
			form label
			{
				padding-right: 17px;
    				margin-left: 32px;
			}
			form input
			{
    				height: 30px;
			}
			form input[type="password"]
			{
				margin-left: 20px;
    				margin-bottom: 30px;
			}
			form button[type="submit"]
			{
				margin-left: 35%;
    				padding: 5px;
    				width: 27%;
    				font-size: 16px;
    				border: 1px solid white;
    				border-radius: 20px;
    				color: white;
    				background-color: transparent;
			}
			form button[type="submit"]:hover
			{
				color: #15adf8;
    				background-color: white;
			}

			

		</style>
	</head>
	<body>
		<div class="back-button">
		<a href="adminlogin.php" ><img src="leftbutton2.png"></a>
		</div>
		<div class="forward-button">
		<a href="adminlogin.php" ><img src="rightbutton2.png"></a>
		</div>


		<form action="admin1.php" method="post" >
		<h1>Admin Login</h1>
		<p><label>Admin name:</label><input type="text" name="n1" value=""><br></p>
		<p><label>Password:</label><input type="password" name="n2" value=""><br></p>
		<button type="submit">Login</button>
		</form>
	</body>
</html>