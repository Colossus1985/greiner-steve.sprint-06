<!-- <div id = "div_temp" class = "p-0 m-0"> -->
<div class = "pt-3 pe-3 ps-3 mx-5 mb-4 mt-2">
    <table class="table table-striped table-bordered table-borderless table-hover text-nowrap rouded-3">
        <thead class = "bg-info">
            <form method = "POST" action = "viewStock.php">
                <tr class="fw-bolder text-center">
                    <td class = "py-0 px-2 container-fluid align-middle">
                        <h4>Reference</h4>
                        <div class = "d-flex flex-fill">
                            <input class="flex-fill px-3 py-1  btn btn-success shadow justify-content-center d-flex m-1 rounded-pill" 
                                    type = "submit" name = "btn_ref_AZ" value = "▲" >
                            <input class="flex-fill px-3 py-1  btn btn-success shadow justify-content-center d-flex m-1 rounded-pill" 
                                    type = "submit" name = "btn_ref_ZA" value = "▼">
                        </div>
                    </td>
                    <td class = "py-0 px-2 container-fluid align-middle">
                        <h4>Name</h4>
                        <div class = "d-flex flex-fill">
                            <input class="flex-fill px-3 py-1  btn btn-secondary shadow justify-content-center d-flex m-1 rounded-pill" 
                                    type = "button" name = "" value = "▲" >
                            <input class="flex-fill px-3 py-1  btn btn-secondary shadow justify-content-center d-flex m-1 rounded-pill" 
                                    type = "button" name = "" value = "▼">
                        </div>
                    </td>
                    <td class = "py-0 px-2 container-fluid align-middle">
                        <h4>Description</h4>
                        <div class = "d-flex flex-fill">
                            <input class="flex-fill px-3 py-1  btn btn-secondary shadow justify-content-center d-flex m-1 rounded-pill" 
                                    type = "button" name = "" value = "▲" >
                            <input class="flex-fill px-3 py-1  btn btn-secondary shadow justify-content-center d-flex m-1 rounded-pill" 
                                    type = "button" name = "" value = "▼">
                        </div>
                    </td>
                    <td class = "py-0 px-2 container-fluid align-middle">
                        <h4>Stock</h4>
                        <div class = "d-flex flex-fill">
                            <input class="flex-fill px-3 py-1  btn btn-success shadow justify-content-center d-flex m-1 rounded-pill" 
                                    type = "submit" name = "btn_stock_09" value = "▲">
                            <input class="flex-fill px-3 py-1  btn btn-success shadow justify-content-center d-flex m-1 rounded-pill" 
                                    type = "submit" name = "btn_stock_90" value = "▼">
                        </div>
                    </td>
                    <td class = "py-0 px-2 container-fluid align-middle">
                        <h4>Price Buy</h4>
                        <div class = "d-flex flex-fill">
                            <input class="flex-fill px-3 py-1  btn btn-success shadow justify-content-center d-flex m-1 rounded-pill" 
                                    type = "submit" name = "btn_buy_09" value = "▲">
                            <input class="flex-fill px-3 py-1  btn btn-success shadow justify-content-center d-flex m-1 rounded-pill" 
                                    type = "submit" name = "btn_buy_90" value = "▼">
                        </div>
                    </td>
                    <td class = "py-0 px-2 container-fluid align-middle">
                        <h4>Price Sell</h4>
                        <div class = "d-flex flex-fill">
                            <input class="flex-fill px-3 py-1  btn btn-success shadow justify-content-center d-flex m-1 rounded-pill" 
                                    type = "submit" name = "btn_sell_09" value = "▲">
                            <input class="flex-fill px-3 py-1  btn btn-success shadow justify-content-center d-flex m-1 rounded-pill"
                                    type = "submit" name = "btn_sell_90" value = "▼">
                        </div>
                    </td>
                    <td class = "py-0 px-2 container-fluid d_flex align-middle">
                        <label class = "fs-3"><?php echo "🧪/🚬"; ?></label>
                        <input classe = "form-check-input" type = "radio" name = "radio_type" value = "all" 
                            <?php
                            if (isset($_POST['radio_type']) && $_POST['radio_type'] == "all") {
                                ?>
                                checked
                                <?php
                            } else {
                                ?>
                                checked
                                <?php
                            }
                            ?>><br>
                        <label class = "fs-3"><?php echo "🧪"; ?></label>
                        <input type = "radio" name = "radio_type" value = "e-liquide"
                            <?php
                            if (isset($_POST['radio_type']) && $_POST['radio_type'] == "e-liquide") {
                                ?>
                                checked
                                <?php
                            }
                            ?>>
                        <label class = "fs-3"><?php echo "🚬"; ?></label>
                        <input type = "radio" name = "radio_type" value = "vapoteuse"
                            <?php
                            if (isset($_POST['radio_type']) && $_POST['radio_type'] == "vapoteuse") {
                                ?>
                                checked
                                <?php
                            }
                            ?>>
                    </td>
                    <td>
                        <input class="fs-3 flex-fill px-3 py-1  btn btn-info justify-content-center d-flex m-1"
                                    type = "submit" name = "reload_table" value = "🔄">
                    </td>
                </tr>
            </form>
        </thead>
        <tbody>
            <?php foreach ($resultat as $product):
                $price_buy = number_format($product['product_buy'],2) ;
                $price_sell = number_format($product['product_sell'],2); 
                
                $nb_row = $nb_row + 1; ?>
                
                    <tr>
                        <form method = "POST" action = "modifProd.php" class = "d-flex">
                            <td class="d-none">
                                <input name = "prod_ref" value = "<?php echo $product['product_ref']; ?>">
                            </td>
                            <td class="d-flex py-0 px-2 bg-info" name = "ref">
                                <input class="flex-fill px-3 py-1  btn btn-success shadow justify-content-center d-flex m-1 rounded-pill"
                                        type = "submit" name = "submit_form_ref_prod" value = "<?php echo $product['product_ref']; ?>">
                            </form>
                        </td>
                        
                        <td class="py-0 px-2 container-fluid align-middle"><?php echo $product['product_name']; ?></td>
                        <td class="py-0 px-2 container-fluid align-middle"><?php echo $product['product_window']; ?></td>
                        <td class="py-0 px-2 container-fluid align-middle text-end"><?php echo $product['product_stock']; ?></td>
                        <td class="py-0 px-2 container-fluid align-middle text-end"><?php echo $price_buy; ?></td>
                        <td class="py-0 px-2 container-fluid align-middle text-end"><?php echo $price_sell; ?></td>
                        <td class="py-0 px-2 container-fluid align-middle"><?php echo $product['product_type']; ?></td>
                        
                        <form method = "POST">
                            <td class="d-none">
                                <input name = "old_ref" value = "<?php echo $product['product_ref']; ?>">
                            </td>
                            <td class="py-0 px-2 container-fluid align-middle bg-danger d-flex">
                                <input class="flex-fill px-3 py-1  btn btn-success shadow justify-content-center d-flex m-1 rounded-pill"
                                        type = "submit" name = "delete_prod" value = "♻️" onclick="return confirm('Confirm deleting, please!!')">
                            </td>
                        </form>
                    </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
