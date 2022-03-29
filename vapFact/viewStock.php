<?php
session_start(); 
$table_name = "`".$_SESSION['id']."`";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Vap Factory Stock Gestion</title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/vapFactStock.css" /> -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <?php
    $nb_row = 0;
    include 'composant/navabar_logged.php';
    ?>
    
    <h1 class = "mt-4 pt-5 ms-5">Vap Factory Stock</h1>
       
    <?php
    if (isset($_POST['btn_ref_AZ']) ||
        isset($_POST['btn_ref_ZA']) ||
        isset($_POST['btn_stock_09']) ||
        isset($_POST['btn_stock_90']) ||
        isset($_POST['btn_buy_09']) ||
        isset($_POST['btn_buy_90']) ||
        isset($_POST['btn_sell_09']) ||
        isset($_POST['btn_sell_90'])) {
            ?>
            
            <?php
            include 'exec/viewStockExec.php';
            ?>
            
            <?php
        } else {  
          
          include 'composant/config.php';      
          $sql_viewStock = $bdd -> prepare("SELECT * FROM $table_name");
          $check = $sql_viewStock -> execute();
          if (!$check){echo "Problème pendant la récupération des informations";}
          $resultat = $sql_viewStock -> fetchAll();
          $bdd = null;
          include 'composant/tableStock.php';
          }
      
      ?>

      <?php 
      if (isset($_POST['submit_modif_prod'])) {
          include 'exec/modifProdExec.php';
      }

      if (isset($_POST['delete_prod'])) {
        include 'exec/deleteProdExec.php';
      }
?>
    <script type="text/javascript" src="../js/vapFactModifBDD.js"></script>
  </body>
</html>
 