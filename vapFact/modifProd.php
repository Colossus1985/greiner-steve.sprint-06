<?php
session_start(); 
$table_name = "`".$_SESSION['id']."`";
$err_prod_ref = "";
$prod_ref = "";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Vap Factory Stock Gestion</title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/vapFactModifBDD.css" /> -->
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
      include 'composant/navabar_logged.php';
      ?>

      <h1 class = "mt-4 pt-5 ms-5">Vap Factory Modification Stock</h1>
      <?php 
        include 'composant/formRefProd.php'; 
      ?>
      
      <?php 
      if (isset($_POST['submitNew'])) { 
        include 'composant/formAddNewRef.php'; 
      }
      ?>
      <?php 
      if (isset($_POST['insert'])) {
        include 'exec/addRefExec.php';
      }
      ?>

      <?php 
      //$regex = "/^[0-9a-zA-Z-' ]*$/";
      if (isset($_POST['submit_form_ref_prod_table'])) {
        $prod_ref = "'" . $_POST['submit_form_ref_prod_table'] . "'";
        if ($prod_ref == "''"){
            include "composant/refNotSet.php";
        } else {
        include 'composant/config.php';
            $product_request = $bdd -> prepare("SELECT * FROM $table_name WHERE product_ref = $prod_ref");
            $check = $product_request -> execute();
            $product = $product_request -> fetchAll(); 
            $bdd = null;
                  
            if (sizeof($product) == 0) { 
                include 'composant/formAskAddRef.php';
            } else {
                include 'composant/formModifDetail.php';
            }
        }
    }

      if (isset($_POST['submit_form_ref_prod'])) {
          $prod_ref = "'" . $_POST['prod_ref'] . "'";
          if ($prod_ref == "''"){
              include "composant/refNotSet.php";
          } else {
          include 'composant/config.php';
              $product_request = $bdd -> prepare("SELECT * FROM $table_name WHERE product_ref = $prod_ref");
              $check = $product_request -> execute();
              $product = $product_request -> fetchAll(); 
              $bdd = null;
                    
              if (sizeof($product) == 0) { 
                  include 'composant/formAskAddRef.php';
              } else {
                  include 'composant/formModifDetail.php';
              }
          }
      }
      if (isset($_POST['delete_prod'])) {
        include 'exec/deleteProdExec.php';
        if (!$check){
            echo "there was some troubles while deleting. Sorry";
        } else {
        ?>
        <div class = "d-flex flex-column bg-info p-3 mx-5 border rounded-3">
            <p class = "fs-3 align-self-center" ><strong>
                <?php echo "[" . $ref. "] deleted with succes.";?></strong></p>
        </div>
        <?php
    }
      }
      ?>

      <?php 
      if (isset($_POST['submit_modif_prod'])) {
          include 'exec/modifProdExec.php';
      }
      ?>        
  
    <script type="text/javascript" src="../js/vapFactModifBDD.js"></script>
    <?php
        include 'composant/footer.php';
    ?>
</body>
</html>

<?php
// if (isset($_POST['submit_modif_prod'])) {
//   include 'exec/modifProdExec.php';
// }

function test_input_stock_detail($input) {
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  //echo "control input: ". $input. "<br>";
  return $input;
}
?>