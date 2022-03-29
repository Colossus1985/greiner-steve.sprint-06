<?php
$table_name = "`".$_SESSION['id']."`";

$regex_input_txt = "/^[0-9a-zA-Z-' ]*$/" ;
$regex_input_numbers = "/^[0-9.]*$/";
$regex_txt = "/^[0-9a-zA-Z-']*$/";

$input_err = "only numbers and [.] (exp 13.99)";
$input_err = "only numbers and letters";
$input_err = "only numbers and letters and whitespaces";

$err_ref = "need reference <br>";
$err_name = "need name <br>";
$err_descipt = "need description <br>";
$err_stock = "need stock <br>";
$err_priceSell = "need selling price <br>";
$err_priceBuy = "need buying price <br>";
$err_type = "need product type <br>";

    if (empty($_POST['ref'])){
        echo $err_ref;
    } else {
        $ref = test_input_stock_detail($_POST['ref']);
        // if (!preg_match(regex_txt, $ref)) {
        //     $err_ref = "Only letters and numbers allowed"; 
        // }
    }
    if (empty($_POST['name'])){
        echo $err_name;
    } else {
        $name = test_input_stock_detail($_POST['name']);
        // if (!preg_match(regex_txt, $name)) {
        //     $err_name = "Only letters, white spaces and numbers allowed"; 
        // }
    }
    if (empty($_POST['descipt'])){
        echo $err_descipt;
    } else {
        $descipt = test_input_stock_detail($_POST['descipt']);
        // if (!preg_match(regex_txt, $descipt)) {
        //     $err_descipt = "Only letters, white spaces and numbers allowed"; 
        // }
    }
    if (!isset($_POST['stock'])){
        echo $err_stock;
    } elseif (!is_numeric($_POST['stock'])) {
      echo "Only numbers, please.";
    } elseif ($_POST['stock'] == "0") {
      $stock = 0;
    } else {
        $stock = test_input_stock_detail($_POST['stock']);
        // if (!preg_match(regex_txt, $stock)) {
        //     $err_stock = "Only numbers allowed"; 
        // }
    }
    if (!isset($_POST['priceSell'])) {
        echo $err_priceSell;
    } elseif (!is_numeric($_POST['priceSell'])) {
      echo "Only numbers and one point, please.";
    } elseif ($_POST['priceSell'] == 0) {
          $priceSell = 0;
    } else {
            $priceSell = test_input_stock_detail($_POST['priceSell']);
        // if (!preg_match(regex_txt, $priceBuy)) {
        //     $err_priceBuy = "Only numbers and dott allowed "; 
        // }
    }
    

    if (!isset($_POST["priceBuy"])) {
        echo $err_priceBuy;
    } elseif (!is_numeric($_POST['priceBuy'])) {
      echo "Only numbers and one point, please.";
    } elseif ($_POST["priceBuy"] == "0") {
            $priceBuy = 0;
    } else {
            $priceBuy = test_input_stock_detail($_POST["priceBuy"]);
        // if (!preg_match(regex_txt, $priceBuy)) {
        //     $err_priceBuy = "Only numbers and dott allowed "; 
        // }
        }
         
    if (!empty($_POST['type'])) {
        $type = $_POST['type'];
    } else {
      echo $err_type;
    }


// echo "<br> ref" . " [" . $ref . "] " . " [" . $_POST["ref"] . "] <br>";
// echo "name" . " [" . $name . "] " . " [" . $_POST["name"] . "] <br>";
// echo "descipt" . " [" . $descipt . "] " . " [" . $_POST["descipt"] . "] <br>";
// echo "stock" . " [" . $stock . "] " . " [" . $_POST["stock"] . "] <br>";
// echo "priceSell" . " [" . $priceSell . "] " . " [" . $_POST["priceSell"] . "] <br>";
// echo "priceBuy" . " [" . $priceBuy . "] " . " [" . $_POST["priceBuy"] . "] <br>";
// echo "type" . " [" . $type . "] " . " [" . $_POST["type"] . "] <br>";


if (!empty($ref) && !empty($name) && !empty($descipt) && isset($stock) && isset($priceSell) && isset($priceBuy) && !empty($type)){
  include 'composant/config.php';
  $sql_check_exist = $bdd -> prepare("SELECT product_ref FROM $table_name WHERE product_ref = '$ref'");
  $check = $sql_check_exist -> execute();
  if (!$check) {echo "There was an error while connecting for checking reference existance.";}
  $res_sql_check_exist = $sql_check_exist -> fetchAll();
  $bdd = null;

  if (sizeof($res_sql_check_exist) == 0) {
    include 'composant/config.php';
    $add_prod = $bdd -> prepare("INSERT INTO $table_name (product_ref, product_name, product_window, product_stock, product_buy, product_sell, product_type) 
                VALUES ('$ref', '$name', '$descipt', $stock, $priceSell, $priceBuy, '$type')");
    $response = $add_prod -> execute();
    if (!$response) {
      echo "there was an erreur while connecting for add";
    } else {
      ?>
        <div class = "d-flex flex-column bg-info p-3 mx-5 border rounded-3">
            <p class = "fs-3 align-self-center" ><strong>
                <?php echo "[" . $ref. "] added with succes.";?></strong></p>
        </div>
      <?php
    }
    $bdd = null;
  } else {
    ?>
        <div class = "d-flex flex-column bg-info p-3 mx-5 border rounded-3">
            <p class = "fs-3 align-self-center" ><strong>
                <?php echo "[" . $ref. "] exists already.";?></strong></p>
        </div>
    <?php
  }
} else {
  echo "One of the informations are not avaiable.";
}
?>