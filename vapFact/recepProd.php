<?php
session_start(); 
$table_name = "`".$_SESSION['id']."`";
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

    <h1 class = "mt-4 pt-5 ms-5">Vap Factory Reception</h1>

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
$old_stock = "";
$qte_received = "0";

if (isset($_POST['submit_form_ref_prod'])) {
    if (empty($_POST['prod_ref'])) {
        include "composant/refNotSet.php";
    } else {
      $prod_ref = "'" . $_POST['prod_ref'] . "'";
      if ($prod_ref == "''") {
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
            ?>
            <div id = "div_temp">
              <?php
              foreach ($product as $product_detail): 
              ?>
                <div class = "p-3 mt-2 mb-4 mx-5 bg-info rounded">
                    <form class = "d-flex flex-column border rounded p-2" method = "POST">
                        <div class = "d-flex flex-row flex-fill">
                            <div class = "d-flex flex-column flex-fill">
                                <input class = "fw-bolder bg-dark text-white flex-fill px-3 py-2 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                        name = "ref"  value = "<?php echo $product_detail['product_ref']; ?>" readonly>
                                <input class = "bg-dark text-white  flex-fill px-3 py-2 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                        name = "name" value = "<?php echo $product_detail['product_name']; ?>" readonly>
                                <input class = "bg-dark text-white  flex-fill px-3 py-2 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                        name = "old_stock" " value = "<?php echo $product_detail['product_stock']; ?>" readonly>
                            </div>
                            <div class = "d-flex flex-column flex-fill pt-4">
                                <div class = "d-flex flex-column flex-fill pt-5">
                                    <input class="fs-4 flex-fill mt-5 px-3 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                            name = "recep_stock" type = "number" placeholder = "quantity to receive">
                                </div>
                            </div>
                        </div>
                        <div class = "d-flex flex-row flex-fill">
                            
                            <input class="flex-fill px-3 py-1  btn btn-success shadow justify-content-center d-flex m-2 rounded-pill"
                                    type="submit" name="add_stock" value = "✔">
                        </div>
                    </form>
                </div>
              <?php 
              endforeach;  
              ?>
            </div>
            <?php
            }
        }
    }
}

if (isset($_POST['add_stock'])) {
    if (isset($_POST['recep_stock']) && isset($_POST['old_stock']) && isset($_POST['ref'])) {
        $ref = $_POST['ref'];
        $old_stock = (int)$_POST['old_stock'];
        $qte_received = (int)$_POST['recep_stock'];
        
        $new_stock = $old_stock + $qte_received;
        include 'composant/config.php';
        $sql_stock = $bdd -> prepare("UPDATE $table_name SET product_stock = $new_stock WHERE product_ref = '$ref'");
        $check = $sql_stock -> execute();
        if (!$check) {
          echo "Problem encounted while reception";
        } else {
            ?>
            <div class = "d-flex flex-column bg-info p-3 mx-5 border rounded-3">
                <p class = "fs-3 align-self-center" ><strong>
                    <?php echo "[" . $qte_received. "] UVC(s) added for product ref [" . $ref . "].<br>
                                New stock : [" . $new_stock . "].";?></strong></p>
            </div>
            <?php
        }
        $bdd = null;
    }
}
?>   
    <?php
    include 'composant/footer.php';
    ?>
    <script type="text/javascript" src="../js/vapFactModifBDD.js"></script>
  </body>
</html>

<?php
function test_input_stock_detail($input) {
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  //echo "control input: ". $input. "<br>";
  return $input;
}
?>