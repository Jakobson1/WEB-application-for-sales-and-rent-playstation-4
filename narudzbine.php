<?php
session_start();
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="iznajmljivanje sony 4 konzole">
        <meta name="author" content="PS4TEAM">
        <meta name="keywords" content="iznajmljivanje,playstation,sony4,konzole,gaming,povoljno">
        <title>PS4 Team</title>
        <!--Favicon-->
        <link rel="shortcut icon" href="img/dsadas.jpg">
        <!--Reset Script-->
        <link href="css/reset.css" rel="stylesheet" type="text/css">
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- custom css -->
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <!-- font awesome for icons -->
        <link href="font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">         
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Fjalla+One%7CCantarell:400,700,700italic%7COpen+Sans:400,700,700italic' rel='stylesheet' type='text/css'>
        <style>
		body{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			background: url(css/slika.jpg) no-repeat;
			background-size: cover;
		}
		</style>
        	
    </head>
    <body style="background-color:grey;">
			   <section id="navigation">
            <div class="navbar navbar-default navbar-fixed-top " role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                            
                        </button>
                        <a class="navbar-brand" href="index.php"><img src="img/hc_logo.png" class="img-responsive" alt="logo-white"></a>
                    </div>
                    <div class="navbar-collapse collapse">

                        <ul class="nav navbar-nav navbar-right scrollto" id="edit">
                            <li><a href="index.php"><h5 style="font-weight: bold;">Naslovna</h5></a></li>
							<?php if(isset($_SESSION['id'])) {?>
							<li class="dropdown" style="margin-top:8px;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo($_SESSION['KorisnickoIme']) ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
          </ul>
        </li>
		 <li><a href="izlog.php"><h5 style="font-weight: bold;">Izloguj se</h5></a></li>
							<?php }else{ ?>
                            <li><a href="../Site/login.php"><h5 style="font-weight: bold;" id="logg">Uloguj se</h5></a></li>
								<?php } ?>
                           
                        </ul>
                   <!--/.nav-collapse -->
                </div><!--/.container -->
            </div><!--navbar-default-->
        </section>
		<section class='content'>
        <div class="panel panel-default" style="margin-top:250px;">
  <div class="panel-body">
	 <table class="table table-stripped" style='color:black;'>
	 <thead>
	 <th>ID</th>
	 <th>Email</th>
	 <th>Tip</th>
	 <th>Adresa</th>
	 </thead>
	 <tbody>
	 <?php  
	 include_once "konekcija.php"; // ukljucujemo fajl sa konekcjom// 

	$GLOBALS['conn']=connection();



		$query = 'SELECT * from narudzbina';
		$result = mysqli_query($GLOBALS['conn'],$query);
	 
	 while($red = mysqli_fetch_assoc($result))
                { ?>
			<?php  print("<tr><td>".$red['IDKorisnika']."</td><td>". $red['Email'] . "</td><td>".$red['Tip']."</td><td>".$red['Adresa']."</td></tr>");
			
				}?>
	 <td></td>
	 </tbody>
	 </table>
</div>
</div>
</section>
	
        
        
        <script src="js/jquery.min.js"></script>        
        <!--bootstrap js plugin-->
               
        <script src="js/jquery-1.11.1.js" type="text/javascript"></script>        
                <!-- REQUIRED BOOTSTRAP SCRIPTS -->
        <script src="js/bootstrap.js"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!--easing plugin for smooth scroll-->
        <script src="js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <script src="js/jquery.sticky.js" type="text/javascript"></script>
		
  
    </body>
	</html>