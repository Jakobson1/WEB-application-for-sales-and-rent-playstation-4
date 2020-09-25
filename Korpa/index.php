   <?php   
 session_start(); //funkcija za pocetak sesije// 
 $connect = mysqli_connect("localhost", "root", "", "korpa");  // konektovanje na bazu podataka 
 if(isset($_POST["add_to_cart"]))  // naredba koja proverava dogadjaj submit dugmeta dodaj u korpu//
 {  
      if(isset($_SESSION["shopping_cart"]))  // ukoliko ima podataka u korpi
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["ID"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["ID"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Proizvod je vec dodat u korpu")</script>';  
                echo '<script>window.location="korpa.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["ID"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Proizvod obrisan")</script>';  
                     echo '<script>window.location="korpa.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
      	

      	<style type="text/css">
      		
      	body{
      		background:url(x.png);
      	}
      	#prvi{
      		font-weight: bold;
      		font-family: Arial;
      		color:#80ff80;
      	}
 		
      	</style>
           <title>Stranica za proizvode</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
          
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
                <h3 align="center" id="prvi">Spisak Proizvoda</h3><br />  
                <?php  
                $query = "SELECT * FROM proizvod ORDER BY ID ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="index.php?action=add&id=<?php echo $row["ID"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; margin-top:15px; margin-bottom: 10px;" align="center">  
                               <img src="<?php echo $row["slika"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["ime"]; ?></h4>  
                               <h4 class="text-danger">$ <?php echo $row["cena"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["ime"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["cena"]; ?>" />  
                               <input type="submit" formaction="korpa.php" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Dodaj u korpu" /> 
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                
      </body>  
 </html>
   