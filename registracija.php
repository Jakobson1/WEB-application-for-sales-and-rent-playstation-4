<?php
include_once "konekcija.php";
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		function validate_form(event)
		{

				var ime_value = document.getElementById('ime').value;
				var prezime_value = document.getElementById('prezime').value;
				var email_value = document.getElementById('email').value;
				var korisnicko_ime = document.getElementById('korisnicko_ime').value;
				var sifra_value = document.getElementById('sifra').value;
				if(ime_value=="")
				{
					event.preventDefault();
					alert("Ime mora biti popunjeno!\nUnesite Ime");
					return false;
				}
			else if(prezime_value=="")
				{
					event.preventDefault();
					alert("Prezime mora biti popunjeno!\nUnesite Prezime");
					return false;
				}	
				else if(email_value=="")
				{
					event.preventDefault();
					alert("Email mora biti popunjen!\nUnesite Email");
					return false;
				}
				else if(korisnicko_ime=="")
				{
					event.preventDefault();
					alert("Korisnicko ime mora biti popunjeno!\nUnesite Korisnicko Ime");
					return false;
				}
				else if(sifra=="")
				{
					event.preventDefault();
					alert("Sifra mora biti popunjena!\nUnesite Sifru");
					return false;
				}
				else{
					return true;
				}

		}
			
	</script>
<link rel="stylesheet" type="text/css" href="css/registracija.css">
	<meta charset="utf-8">
	<title>Registruj se</title>
</head>
<body>
<div class="signupBox">
<h2>Registruj se</h2>
<form action="reg.php" method="post" name="form" onsubmit="validate_form(event);">
	<p>Ime</p>
	<input type="text" name="ime" placeholder="Unesite vaše ime"  autocomplete="off" id="ime">
	<p>Prezime</p>
	<input type="text" name="prezime" placeholder="Unesite vaše prezime" autocomplete="off" id="prezime">
	<p>Email</p>
	<input type="text" name="email" placeholder="Unesite vaš email"   autocomplete="off" id="email">
	<p>Korisničko ime</p>
	<input type="text" name="korisnicko_ime" placeholder="Unesite vaše korisničko ime" id = "korisnicko_ime" autocomplete="off">
	<p>Šifra</p>
	<input type="password" name="sifra" placeholder="Unesite vašu šifru"  autocomplete="off" id="sifra">
	<br>
	<input type="submit" name="submit" value="Registruj se">
</form>
</div>
</body>
</html>
