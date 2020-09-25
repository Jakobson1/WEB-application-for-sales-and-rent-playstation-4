<?php

include_once "konekcija.php";

	 $Ime='';
	 $Prezime='';
	 $Email='';
	 $Korisnicko_Ime='';
	 $Sifra='';
		
		$kon=connection();

		if(isset($_POST['submit']))
		{
			$Ime = $_POST['ime'];
			$Prezime = $_POST['prezime'];
			$Email = $_POST['email'];
			$Korisnicko_Ime = $_POST['korisnicko_ime'];
			$Sifra = $_POST['sifra'];

		}

		$upit = "INSERT INTO registracija(Ime,Prezime,Email,Korisnicko_Ime,Sifra) VALUES ('$Ime','$Prezime','$Email','$Korisnicko_Ime','$Sifra')";

		$rezultat=$kon->query($upit);

	
   /* if($rezultat){

        echo("<br>Input data is successful");
        echo "<a href='index.php'>Back to main page</a>";
    } 

    else
    {

        echo("<br>Input data is fail");

    }*/
?>

<script type="text/javascript">
	alert("Registracija uspesno izvrsena!\nKliknite na OK da bi ste se vratili na pocetnu stranu");
	window.location.href = "index.php";
</script>
