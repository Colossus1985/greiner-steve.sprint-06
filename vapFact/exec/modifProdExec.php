
<?php
if (isset($_POST['submit_modif_prod'])) {
    $ref = $_POST['old_ref'];
    if (!empty($_POST['new_ref'])) {
        $new_ref = test_input_stock_detail($_POST['new_ref']);} else {$new_ref = $_POST['old_ref'];}
    if (!empty($_POST['new_name'])) {
        $new_name = test_input_stock_detail($_POST['new_name']);} else {$new_name = $_POST['old_name'];}
    if (!empty($_POST['new_window'])) {
        $new_discription = test_input_stock_detail($_POST['new_window']);} else {$new_discription = $_POST['old_window'];}
        



        if ($_POST['new_stock'] != "" && $_POST['new_stock'] != null) {
            echo "new_stock setted<br>";
            if (!empty($_POST['new_stock']) && $_POST['new_stock'] == 0) {
                echo "new_stock setted 0<br>";
                $new_stock = 0;
            } else {
                echo "new_stock setted 1<br>";
                $new_stock = $_POST['new_stock'];
            } 
        } elseif ($_POST['new_stock'] == "" && $_POST['old_stock'] == 0) {
                echo "new_stock not setted 0<br>";
                $new_stock = 0;
        } else {
            echo "new_stock not setted 1<br>";
            $new_stock = $_POST['old_stock'] ;
        }
        echo "new_stock [".$new_stock."]<br><br>";
    
        if ($_POST['new_price_buy'] != "" && $_POST['new_price_buy'] != null) {
            echo "new_price_buy setted<br>";
            if ($_POST['new_price_buy'] == 0) {
                echo "new_price_buy setted 0<br>";
                $new_price_buy = number_format(0,2);
            } else {
                echo "new_price_buy setted 1<br>";
                $new_price_buy = number_format($_POST['new_price_buy'],2);
            }
        } elseif ($_POST['new_price_buy'] == "") {
            echo "new_price_buy not setted <br>";
            if ($_POST['old_price_buy'] == 0) {
                echo "new_price_buy not setted 0<br>";
                $new_price_buy = number_format(0,2);
            } else {
                echo "new_price_buy not setted 1<br>";
                $new_price_buy = number_format($_POST['old_price_buy'],2);
            }
        }
        echo "new_price_buy [".$new_price_buy."]<br><br>";

        if ($_POST['new_price_sell'] != "" && $_POST['new_price_sell'] != null) {
            echo "new_price_sell setted<br>";
            if ($_POST['new_price_sell'] == 0) {
                echo "new_price_sell setted 0<br>";
                $new_price_sell = number_format(0,2);
            } else {
                echo "new_price_sell setted 1<br>";
                $new_price_sell = number_format($_POST['new_price_sell'],2);
            }
        } elseif ($_POST['new_price_sell'] == "") {
            echo "new_price_sell not setted<br>";
            if ($_POST['old_price_sell'] == 0) {
                echo "new_price_sell not setted 0<br>";
                $new_price_sell = number_format(0,2);
            } else {
                echo "new_price_sell not setted 1<br>";
                $new_price_sell = number_format($_POST['old_price_sell'],2);
            }
        }
        echo "new_price_sell [".$new_price_sell."]<br><br>";


        // if (isset($_POST['new_price_buy'])) {
        //     if ($_POST['new_price_buy'] == 0) {
        //         $new_price_buy = 0;
        //         // $new_price_buy = number_format(0,2);
        //         // $price = (int)$_POST['new_price_buy'];
        //         // $new_price_buy = number_format($price,2);
        //     } else {
        //      $new_price_buy = number_format($_POST['new_price_buy'],2);
        //     }
        // }
    
        // if (isset($_POST['new_price_sell'])) {
        //     if ($_POST['new_price_sell'] == 0) {
        //         $new_price_sell = 0;
        //         // $new_price_sell = number_format(0,2);
        //         // $price = (int)$_POST['new_price_sell'];
        //         // $new_price_sell = number_format($price,2);
        //     } else {
        //     $new_price_sell = number_format($_POST['new_price_sell'],2);
        //     }
        // }



    if (isset($_POST['new_type'])) {
        $new_type = $_POST['new_type'];} else {$new_type = $_POST['old_type'];}

    // echo "1ref reference: " . $ref . " [" .$_POST['old_ref']."]<br>";
    // echo "2ref reference: " . $ref . " [" .$_POST['new_ref']."]<br>";
    // echo "1new_ref: " . $new_ref ." [".$_POST['old_ref']."]<br>";
    // echo "2new_ref: " . $new_ref ." [".$_POST['new_ref']."]<br>";
    // echo "1new_name: " . $new_name ." [" .$_POST['old_name']."]<br>";
    // echo "2new_name: " . $new_name ." [" .$_POST['new_name']."]<br>";
    // echo "1new_discription: " . $new_discription ." [" .$_POST['old_window']."]<br>";
    // echo "2new_discription: " . $new_discription ." [" .$_POST['new_window']."]<br>";
    // echo "1old_stock: " . $new_stock ." [".$_POST['old_stock']."]<br>";
    // echo "2new_stock: " . $new_stock ." [".$_POST['new_stock']."]<br>";
    // echo "1old_price_buy: " . $new_price_buy ." [".$_POST['old_price_buy']."]<br>";
    // echo "2new_price_buy: " . $new_price_buy ." [".$_POST['new_price_buy']."]<br>";
    // echo "1old_price_sell: " . $new_price_sell ." [".$_POST['old_price_sell']."]<br>";
    // echo "2new_price_sell: " . $new_price_sell ." [".$_POST['new_price_sell']."]<br>";
    // echo "1new_type: " . $new_type ." [".$_POST['old_type']."]<br>";
    // echo "2new_type: " . $new_type ." [".$_POST['new_type']."]<br>";

    include 'composant/config.php';

    $product_modif_request = $bdd -> prepare("UPDATE $table_name SET 
                                    `product_ref` = '$new_ref',
                                    `product_name` = '$new_name',
                                    `product_window` = '$new_discription',
                                    `product_stock` = '$new_stock',
                                    `product_buy` = '$new_price_buy',
                                    `product_sell` = '$new_price_sell',
                                    `product_type` = '$new_type' 
                                    WHERE `product_ref` = '$ref'");

    $response_modif_request = $product_modif_request -> execute();
    $bdd = null;
    if ($response_modif_request){
        ?>
        <div class = "d-flex flex-column bg-info p-3 mx-5 border rounded-3">
            <p class = "fs-3 align-self-center" ><strong>
                <?php echo "[" . $ref. "] modified with succes.";?></strong></p>
        </div>
        <?php
    } else {
        echo "there was some troubles with the modifications. Sorry";
    }
}
?>