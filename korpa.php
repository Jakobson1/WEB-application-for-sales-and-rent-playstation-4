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
							<li><i class="fas fa-shopping-cart" style="color:black"></i></li>
							<li class="dropdown" style="margin-top:8px;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo($_SESSION['KorisnickoIme']) ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
          </ul>
        </li>
							<?php }else{ ?>
                            <li><a href="../Site/login.php"><h5 style="font-weight: bold;" id="logg">Uloguj se</h5></a></li>
								<?php } ?>
                            <li><a href="#">
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container -->
            </div><!--navbar-default-->
        </section>
        
	   <section id="prices" style='text-align:center;'>
            
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="pricing-heading text-center">
                            <h2 style="color:white;font-weight: bold;">Potvrda iznajmljivanja</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">                        
                        <div class="col-sm-12">
                            <div class="panel price panel-blue"><!-- PRICE ITEM -->
                                <div class="panel-heading  text-center">
                                <h3><?php echo($_SESSION['tip']) ?><br>
                                	<?php echo($_SESSION['dan']) ?> DAN/A <br>
                                </h3>
                                </div>                            
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item"><?php echo( $_SESSION['cena']) ?> din</li>
                                    <li class="list-group-item">2 DualShock kontrolera</li>
                                    <li class="list-group-item">Najpopularnije igre</li>
                                   

                                </ul>
                                <div class="panel-footer">
                                    
                                </div>
                            </div>
                        </div>
                
                        </div>
                    </div>                                    
             <div class="row">   
								<div class="col-md-offset-3 col-md-6  col-sm-offset-1" style='margin-top:150px;' >
                           
									<div id="show_contact_msg"></div>
								<!-- Contact Form Start -->
									<form method="post" id="contact_form" action="sacuvajNarudzbinu.php">
										<input type="text" name="adresa" class="form-control contact_input_box" placeholder="Adresa" required="">
										<input type="hidden" name="id" value='<?php echo($_SESSION['id'])  ?>'>
										<input type="hidden" name="tip" value='<?php echo($_SESSION['tip'])  ?>'>
										
										<button type="submit" class="btn btn-primary contact_button"> Iznajmi</button>
									</form>
									</div>
								<!-- Contact Form End -->
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