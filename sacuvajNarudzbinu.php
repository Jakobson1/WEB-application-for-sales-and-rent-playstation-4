<?php

session_start();

if (isset($_SESSION['id'])) {
  
        include_once "konekcija.php"; // ukljucujemo fajl sa konekcjom// 

$GLOBALS['conn']=connection();

        	$adresa = $_POST['adresa'];
	$tip = $_POST['tip'];
    $userID = $_POST['id'];

		$query = 'SELECT Email from registracija where ID ='.$userID;
		$result = mysqli_query($GLOBALS['conn'], $query);
		$red = mysqli_fetch_assoc($result);
		
			$email = $red['Email'];

		
        $insert = "INSERT INTO narudzbina(IDKorisnika, Email ,Tip, Adresa) VALUES ('" . $userID . "','" . $email . "','" . $tip . "','" . $adresa . "')";

        mysqli_query($GLOBALS['conn'], $insert);
		$_SESSION['msg'] = 'Uspesno';
        header("Location:index.php");
 

} else {
	
    header("Location:registracija.php");
}
?>