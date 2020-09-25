<?php
include('log.php');
if(isset($_SESSION['login_user']))
{
	header("location: index.php");
}


?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


	<meta charset="utf-8">

<title>	Uloguj se</title>

<script type="text/javascript">
	
	function validate_form(event)
	{
		var login_value = document.getElementById("username").value;
		var password_value = document.getElementById("password").value;

		if(login_value=="")
		{
			event.preventDefault();
			document.getElementById("lbl1").removeAttribute("hidden");
			return false;

		}
		else if(password_value=="")
		{
			event.preventDefault();
			document.getElementById("lbl2").removeAttribute("hidden");
			return false;
		}
		else
		{
			return true;
			  document.getElementById("logg").hidden = true;

		}
		

	}
</script>

	<style type="text/css">
		

		body{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			background: url(css/slika.jpg) no-repeat;
			background-size: cover;
		}
		.login-box{
			width: 280px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			color: #80ff80;

					}
		.login-box h1{
			margin-left: 70px;
			float: left;
			font-size: 40px;
			border-bottom: 6px solid;
			margin-bottom: 50px;
			padding: 13px 0;
		}

		.textbox{
			width: 100%;
			overflow: hidden;
			font-size: 20px;
			padding:8px 0;
			margin: 8px 0;
			border-bottom: 1px solid;
		}
		.textbox i{
			width: 26px;
			float: left;
			text-align: center;
		}

		.textbox input{
			border:none;
			outline: none;
			background:none;
			color:white;
			font-size: 18px;
			width: 80%;
			float: left;
			margin: 0 10px;
		}

		.btn{
			width: 100%;
			background: none;
			border:2px solid;
			color:white;
			padding: 5px;
			font-size: 18px;
			cursor: pointer;
			margin:12px 0;
		}
	</style>
</head>
<body>
<form action="log.php" method="post" onsubmit="validate_form(event)">
<div class="login-box">
	<h1>Login</h1>
	<div class="textbox">
		<i class="fas fa-user"></i>
		<input type="text" name="username" placeholder="Korisničko ime"  id="username" autocomplete="off">
	</div>
	<div class="textbox">
		<i class="fas fa-lock"></i>
		<input type="password" name="password" placeholder="Šifra" id="password">
	</div>
	<label hidden="hidden" style="color:#80ff80; margin-left: 50px;" id="lbl1">Morate uneti korisničko ime</label>
	<label hidden="hidden" style="color:#80ff80; margin-left: 50px;" id="lbl2">Morate uneti Šifru</label>


<input class="btn" type="submit" name="Submit" > 
<p>Nemas nalog? Registruj se <a href="../Site/registracija.php" style="color:white;">ovde</a>.

</body>
</html>