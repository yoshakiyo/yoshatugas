<?php
session_start();
if(isset($_SESSION['nama'])){
header("location:admin.php");
}


?>
<html>
<head>
<meta charset="utf-8">

    <meta name="product" content="Metro UI CSS Framework">
    <meta name="author" content="Sergey S. Pimenov, Ukraine, Kiev">
    <meta name="description" content="Simple responsive css framework">
    <meta name="keywords" content="Metro, ui, responsive, css, framework, library">

    <link rel="stylesheet" href="css/metro-bootstrap.css">
    <link rel="stylesheet" href="css/docs.css">
    <link href="js/prettify/prettify.css" rel="stylesheet">

    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/prettify/prettify.js"></script>

    <script src="js/metro/metro-loader.js"></script>
    <script src="js/docs.js"></script>
    <script src="js/github.info.js"></script>
	<link rel="icon" type="image/png" href="image/f.png" />
    <title>Data Nelayan Provinsi Jateng</title>
	</head>
<body class="metro">
    <div class="grid fluid">		
		<div class="row">
			<div class="span3 bg-white offset5">
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                <table width="500px" class="hovered  bg-lightGreen"><tr><th width="10"><th>				
					<table class="hovered  bg-lightGreen">
						<Form action="cek.php" method="post" name="login">
						<tr><th colspan="3"><h3>LOGIN ADMIN</h3></th></tr>
						<tr><th>User Name</th><th></th><th>
							<div class="input-control text">
								<input type="text" name="nama" value="" placeholder="input user"/>
								
							</div>
							</th>
							</tr><tr><th>Password</th><th></th><th>
							<div class="input-control password">
								<input type="password" name="password" value="" placeholder="input password"/>
								
							</div>
						</th></tr>
						<tr><th colspan="3"><input type="submit" value="Log In" name="login" o style="color: black; font-weight:bold; background-color: white; border-color: #29447E;" /> </th></tr>
						</Form>
					</table>
					</th></th></tr>
				</table>
			</div>	
		</div>
	</div>	
</body>
</html>