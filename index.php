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
               	
    </head>
   
    <body>
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
                            <li><a href="#home"><h5 style="font-weight: bold;">Naslovna</h5></a></li>
                            <li><a href="#prices"><h5 style="font-weight: bold;">Iznajmljivanje</h5></a></li>
                            <li><a href="#treatments"><h5 style="font-weight: bold;">Igrice</h5></a></li>
                            <li><a href="#contact"><h5 style="font-weight: bold;">Kontakt</h5></a></li>
							<?php if(isset($_SESSION['admin'])) { ?>
							<li><a href="../Site/narudzbine.php"><h5 style="font-weight: bold;">Narudzbine</h5></a></li>
							<?php } if(isset($_SESSION['id'])) {?>
							<li class="dropdown" style="margin-top:8px;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <li><a href="../Site/Korpa/index.php" target="_blank"><h5 style="font-weight: bold;">Proizvodi</h5></a></li>
            <?php echo($_SESSION['KorisnickoIme']) ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
          </ul>
        </li>
		 <li><a href="izlog.php"><h5 style="font-weight: bold;">Izloguj se</h5></a></li>
							<?php }else{ ?>
                            <li><a href="../Site/login.php"><h5 style="font-weight: bold;" id="logg">Uloguj se</h5></a></li>
								<?php } ?>
          
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container -->
            </div><!--navbar-default-->
        </section>
        
		<!--navigation section end here-->
        <section id="home">
            <div class="home-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
						
						<?php if(isset($_SESSION['msg'])){ ?>
						<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert">&times;</a>
							<strong>Uspesno!</strong> Uspesno iznajmljivanje
						</div>
						<?php 
							$_SESSION['msg'] = null;
						} ?>
                            <div class="center-heading text-center" id="pr">                                
                                <h1>PRODAJA I IZNAJMLJIVANJE SONY 4 KONZOLE</h1>
                                                                    
                            </div><!--center heading-->
                        </div>
                    </div><!--center heading-->
                </div>
            </div>       
        </section>
        <section id="prices">
            <div class="prices-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="pricing-heading text-center">
                            <h2 style="color:white;font-weight: bold;">CENE I KARAKTERISTIKE IZNAJMLJIVANJA</h2>
                            </div>
                        </div>
                    </div>
					</div>
                    <div class="row">                        
                        <div class="col-sm-4">
                            <div class="panel price panel-blue"><!-- PRICE ITEM -->
                                <div class="panel-heading  text-center">
                                <h3>BRONZA<br>
                                	1 DAN <br>
                                </h3>
                                </div>                            
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item">1.500 din</li>
                                    <li class="list-group-item">2 DualShock kontrolera</li>
                                    <li class="list-group-item">Najpopularnije igre</li>
                                   

                                </ul>
                                <div class="panel-footer">
								<form method="get" action="iznajmi.php">
								<input type='hidden' name="tip" value="bronza">
                                    <button type='submit' class="btn btn-lg btn-block btn-theme-3" >IZNAJMI</button>
									</form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel price panel-green"><!-- PRICE ITEM -->
                                <div class="panel-heading  text-center">
                                <h3>SREBRNA<br>
                                	2 DANA <br>
                                	+ 3 DAN GRATIS
                                </h3>
                                </div>                            
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item">3.400 din</li>
                                    <li class="list-group-item">2 DualShock kontrolera</li>
                                    <li class="list-group-item">Najpopularnije igre</li>
                                </ul>
                                <div class="panel-footer-g">
                                    <form method="get" action="iznajmi.php">
									<input type='hidden' name="tip" value="srebrna">
                                    <button type='submit' class="btn btn-lg btn-block btn-theme-3" >IZNAJMI</button>
									</form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel price panel-blue"><!-- PRICE ITEM -->
                                <div class="panel-heading  text-center">
                                <h3>ZLATNA<br>
                                	3 DANA <br>
                                	+ 4 DAN GRATIS
                                </h3>
                                </div>                            
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item">4.300 din</li>
                                    <li class="list-group-item">2 DualShock kontrolera</li>
                                    <li class="list-group-item">Najpopularnije igre</li>
                                </ul>

                                <!--
                                	Za iznajmljivanje 3 ili vise dana,koka kola 2l gratis.
                                	Za dodatna 2 DualShock kontrolera, doplata 200 din
                                	Za vise od 4 dana,cena po dogovoru -->
                                <div class="panel-footer">
                                  <form method="get" action="iznajmi.php">
								<input type='hidden' name="tip" value="zlatna">
                                    <button type='submit' class="btn btn-lg btn-block btn-theme-3" >IZNAJMI</button>
									</form>

                                </div>
                            </div>
                        </div>
                       <p style="color:black;"><b>ZA IZNAJMLJIVANJE 3 ILI VISE DANA, KOKA KOLA 2l GRATIS.</b></p>
                       <p style="color:black;"><b>ZA DODATNA 2 DUALSHOCK KONTROLERA, DOPLATA 200 din.</b></p>
                        <p style="color:black;"><b>ZA VISE OD 4 DANA,CENA PO DOGOVORU</b></p>
                    </div>                                    
                </div>
            </div>    
        </section>

        <section id="treatments">
            <div class="treatments-section">
                <div class="container">
                    <div class="treats">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="treatments-heading text-center">
                                <h2 style="color:gray;font-weight: bold;">IGRICE</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">                        
                            <div class="col-sm-4">
                                <div class="treatments">
                                    <ul class="full_overlay">
                                        <li class="content">
                                            
                                        </li>
                                        <li><img class="fifika" style="padding: 50px; transition: transform.2s;width: 300px;height: 300px; margin: 0 auto;" class="top img-responsive" src="img/fifica.jpg" alt="fifa pic"></li>
                                    </ul>    
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="treatments">
                                    <ul class="full_overlay">
                                        <li class="content">
                                          
                                        </li>
                                        <li><img class="pescugica" style="padding: 50px; transition: transform.2s;width: 300px;height: 300px; margin: 0 auto;" class="top img-responsive" src="img/pes.jpg" alt="pescuga"></li>
                                    </ul> 
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="treatments">
                                    <ul class="full_overlay">
                                        <li class="content">
                                           
                                        </li>
                                        <li><img class="basket" style="padding: 50px; transition: transform.2s;width: 300px;height: 300px; margin: 0 auto;" class="top img-responsive" src="img/nba.jpg" alt="kos"></li>
                                    </ul>    
                                </div>
                            </div>
                        </div>
                        <div class="row">                        
                            <div class="col-sm-4">
                                <div class="treatments">
                                    <ul class="full_overlay">
                                        <li class="content">
                                        
                                        </li>
                                        <li><img class="fc" style="padding: 50px; transition: transform.2s;width: 300px;height: 300px; margin: 0 auto;" class="top img-responsive" src="img/ufc.jpg" alt="ufece"></li>
                                    </ul>    
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="treatments">
                                    <ul class="full_overlay">
                                        <li class="content">

                                        </li>
                                        <li><img class="tkn" class="top img-responsive" style="padding: 50px; transition: transform.2s;width: 300px;height: 300px; margin: 0 auto;"  src="img/tkn.jpg" alt="tekn"></li>
                                    </ul>    
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="treatments">
                                    <ul class="full_overlay">
                                        <li class="content">
                                            
                                        </li>
                                        <li><img  class="go" style="padding: 50px; transition: transform.2s;width: 300px;height: 300px; margin: 0 auto;" class="top img-responsive" src="img/god.jpg" alt="treatment pic"></li>
                                    </ul>    
                                </div>
                            </div>
                        </div>
                    </div>         
                </div>
            </div>    
        </section>

        
        <section id="contact">
            <div class="contact-section">
                <div class="container">
                <div class="contact-title">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2>KONTAKT</h2>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="contact-list">                            
                                <ul>
                                    <li>TELEFON: 011/2317-348</li>
                                    <li>FAX: 01 258 546 9513</li>
                                    <li>EMAIL: marko.jakobson@yahoo.com</li>
                                    <li>GRAD: BEOGRAD</li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="contact_form">
									<div id="show_contact_msg"></div>
								<!-- Contact Form Start -->
									<form method="post" id="contact_form" action="contact.php">
										<input type="text" id="contact_name" name="name" class="form-control contact_input_box" placeholder="Name" required/>
										<input type="email" id="contact_email" name="email" class="form-control contact_input_box" placeholder="E-mail" required/>
										<textarea id="contact_text" name="message" rows="6" cols="30" class="form-control contact_input_box" placeholder="Message" required></textarea>
										<button type="submit" class="btn btn-primary contact_button"> </i>Posalji poruku</button>
									</form>
								<!-- Contact Form End -->
								</div>
                        </div>                        
                    </div>
                </div>
            </div>
        </section>
        
        <section id="footer">
            <div class="container">
                <div class="footer">
                    <div class="row">
                        <div class="col-sm-4">
                            <a class="logo" href="index.php"><img src="img/hc_logo.png" class="img-responsive" alt="logo-white"></a>
                        </div> 
                        <div class="col-sm-4 text-center">
                            <div class="copy">
                                <p>&copy; Copyright 2018 PS4TEAM</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="social text-center">
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            </div>    
                        </div> 
                    </div>
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
		
        <script>
        $('#carousel-example').carousel({
            interval: 4000 //TIME IN MILLI SECONDS
        })
        </script> 
        <script>
                    $(function() {
                $('a[href*=#]:not([href=#])').click(function() {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top -89
                            }, 1000);                            
                            return false;
                        }
                    }
                });
            });
        </script>
        <script>
	/* ==============================================
	Ajax Submiting For Email Subscriber Form.
	=====================================================================*/	
	$("#subscriber_form").submit(function(e)
	{
	$('#show_subscriber_msg').html('<div class=gen>Submiting..</div>');
	var subscriberemail = $('#subscriberemail').val();
		var formURL = $(this).attr("action");
		var data = {
					subscriberemail:subscriberemail
				   }
		$.ajax(
		{
			url : formURL,
			type: "POST",
			data : data,
			
		 success: function (res) {
								 if(res=='1'){
									$('#show_subscriber_msg').html('<div class=gen>Thank you very much, We will notify you when we lunch</div>');
								 }
					
								 if(res=='5'){
								 $('#show_subscriber_msg').html('<div class=err>Please enter a valid email address</div>');
								 }
							}
		});
		e.preventDefault();	//STOP default action
	});
	/* ==============================================
	Ajax Submiting For Email Contact Form.
	=====================================================================*/	
	$("#contact_form").submit(function(e)
	{
	$('#show_contact_msg').html('<div class=gen>Submiting..</div>');
	var username = $('#contact_name').val();
	var useremail = $('#contact_email').val();
	var commenttext = $('#contact_text').val();
		var formURL = $(this).attr("action");
		var data = {
					username:username,
					useremail:useremail,
					commenttext:commenttext,
				   }
		$.ajax(
		{
			url : formURL,
			type: "POST",
			data : data,
			
		 success: function (res) {
								 if(res=='1'){
									$('#show_contact_msg').html('<div class=gen>Thank you very much, your message has been sent!</div>');
								 }
					
								 if(res=='5'){
								 $('#show_contact_msg').html('<div class=err>Please enter a valid email address</div>');
								 }
							}
		});
		e.preventDefault();	//STOP default action
	});
	</script>
        
        

   
    </body>
	</html>