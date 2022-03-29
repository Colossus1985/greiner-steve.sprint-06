<?php
if (isset($_POST['delete_prod'])) {
  $ref = $_POST['old_ref'];
  include 'composant/config.php';

  $product_delete_request = $bdd -> prepare("DELETE FROM $table_name 
                                  WHERE `product_ref` = '$ref'");

  $check = $product_delete_request -> execute();
  $bdd = null;
  if (!$check){
    echo "there was some troubles while deleting. Sorry";
  } 
}
