<?php

	function connection()
	{
		try
		{
			$konekcija = new mysqli("localhost","root","","projekat");
		}
		catch(Exception $ex)
		{
			die("Doslo je do greske sa povezivanjem na bazu podataka".$ex);
			return;
		}
		return $konekcija;
	}

?>