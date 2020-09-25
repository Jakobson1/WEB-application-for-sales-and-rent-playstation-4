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
                echo '<script>alert("Item Already Added")</script>';  
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
                if($values["item_id"] == $_GET["ID"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="index.php"</script>';  
                }  
           }  
      }  
 }  
 ?>
 <!DOCTYPE html>
 <html>
 <head>
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

  <style type="text/css">
    #naslov{
      color:#80ff80;
      text-align: center;
      font-weight: bold;
      margin-bottom: 80px;
      margin-top: 40px;
    }
    body{
      background: url(x.png);

    }

    #tabela{
      border-width: 4px;
      border-color: black;
      border-style: solid;
      margin-left: auto;
      margin-right: auto;
    }

  </style>
   <title>Korpa</title>
 </head>
 <body>
<div style="clear:both"></div>  
                <br />  
                <h3 id="naslov">Detalji Korpe</h3>  
                <div>  
                     <table id="tabela">  
                          <tr>  
                               <th width="40%" style="border:5px;">Ime proizvoda</th>  
                               <th width="10%">Kolicina</th>  
                               <th width="20%">Cena</th>  
                               <th width="15%">Ukupno</th>  
                               <th width="5%">Akcija</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td style="margin-left: 5px;"><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>$ <?php echo $values["item_price"]; ?></td>  
                               <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span>Obrisi</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />   


 </body>
 </html>  
