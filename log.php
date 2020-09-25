<?php
session_start();
include_once "konekcija.php"; // ukljucujemo fajl sa konekcjom// 

$kon=connection(); // u promenljivu smestamo funkciju konekcije//
  
if(isset($_POST['username'])){ // ukoliko je isset post ? //
    
    $uname=$_POST['username'];	// uzimamo vrednosti koje je korisnik prosledio formi//
    $password=$_POST['password'];
    
    $sql="SELECT * FROM registracija where Korisnicko_Ime ='".$uname."' AND Sifra ='".$password."' limit 1"; // upit //
    
    $result=$kon->query($sql); // u promenljivu rezultat smestamo upit koji je povezan na bazom 
    
    if (!$red = mysqli_fetch_assoc($result)) {
        header("Location:login.php");
    } else {
		if($red['Admin'] == 1)
		{
			 $_SESSION['admin'] = true;
		}
        $_SESSION['id'] = $red['ID'];
        $_SESSION['KorisnickoIme'] = $uname;
		header("Location:index.php");
    }
    
        
}

?>

