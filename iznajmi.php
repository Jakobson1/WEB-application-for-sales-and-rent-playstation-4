<?php 

session_start();


$tip = $_GET['tip'];

if($tip === 'bronza')
{
	$_SESSION['tip'] = 'BRONZA';
	$_SESSION['dan'] = '1';
	$_SESSION['cena'] = '1500';
	
}
else if($tip === 'srebrna')
{	
	$_SESSION['tip'] = 'SREBRNA';
	$_SESSION['dan'] = '2';
	$_SESSION['cena'] = '3400';
}
else{

	$_SESSION['tip'] = 'ZLATNA';
	$_SESSION['dan'] = '4';
	$_SESSION['cena'] = '4300';
}

header("Location:korpa.php");
?>