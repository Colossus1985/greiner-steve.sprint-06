
<div id = "div_temp">
<div class = "bg-info border rounded-3 p-3 mx-5 mb-4 mt-2">
    <form class = "border p-2 mx-2 d-flex flex-column" method = "POST">
        <?php
        foreach ($product as $product_detail):
            $price_buy = number_format($product_detail['product_buy'],2);
            $price_sell = number_format($product_detail['product_sell'],2); 
            $stock = number_format($product_detail['product_stock'],0);
            ?>
            <div class = "d-flex flex-fill flex-wrap">
                <div class = "d-flex flex-column flex-fill">
                    <div class = "px-3 m-2">
                        <h3>ACTIF<h3>
                    </div>
                    <div class = "d-flex flex-column flex-fill">
                          <input class = "fw-bolder bg-dark text-white flex-fill px-3 py-2 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                  name = "old_ref"  value = "<?php echo $product_detail['product_ref']; ?>" readonly>
                          <input class = "bg-dark text-white  flex-fill px-3 py-2 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                  name = "old_name" value = "<?php echo $product_detail['product_name']; ?>" readonly>
                          <input class = "bg-dark text-white  flex-fill px-3 py-2 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                  name = "old_window" value = "<?php echo $product_detail['product_window']; ?>" readonly>
                          <input class = "bg-dark text-white  flex-fill px-3 py-2 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                  name = "old_stock" value = "<?php echo $stock; ?>" readonly>
                          <input class = "bg-dark text-white  flex-fill px-3 py-2 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                  name = "old_price_buy" value = "<?php echo $price_buy; ?>" readonly>
                          <input class = "bg-dark text-white  flex-fill px-3 py-2 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                  name = "old_price_sell" value = "<?php echo $price_sell; ?>" readonly>
                          <input class = "fs-3 bg-dark text-white  flex-fill px-3 py-2 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                  name = "old_type" value = <?php echo $product_detail['product_type']; ?>>
                    </div>
                </div>
                <div class = "d-flex flex-column flex-fill">
                    <div class = "px-3 m-2">
                        <h3>NEW</h3>
                    </div>
                    <div class = "d-flex flex-fill flex-column">
                        <input class="flex-fill px-3 py-2 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                name = "new_ref" type = "text" placeholder = "new Reference">
                        <input class="flex-fill px-3 py-2 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                name = "new_name" type = "text" placeholder = "new Name">
                        <input class="flex-fill px-3 py-2 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                name = "new_window" type = "text" placeholder = "new Description">
                        <input class="flex-fill px-3 py-2 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                name = "new_stock" type = "number" placeholder = "new Stock" >
                        <input class="flex-fill px-3 py-2 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                name = "new_price_buy" type = "number" placeholder = "new Price Buy" step="0.01">
                        <input class="flex-fill px-3 py-2 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                name = "new_price_sell" type = "number" placeholder = "new Price Sell" step="0.01">
                        <div class = "">
                            <label class="fw-bolder px-3 py-2">new Type</label>
                            <label class = "fs-1 px-3 py-2"><?php echo "🧪";?></label>
                            <input type = "radio" name = "new_type" value = "e-liquide">
                            <label class = "fs-1 px-3 py-2"><?php echo "🚬";?></label>
                            <input type = "radio" name = "new_type" value = "vapoteuse">
                        </div>
                    </div>
                </div>
            </div>
            <div class = "d-flex flex-fill mt-5 flex-wrap">
                <input class="flex-fill px-3 py-1  btn btn-success shadow justify-content-center d-flex m-2 rounded-pill"
                        type="submit" name="submit_modif_prod" value = "✔">
                <input class="flex-fill px-3 py-1  btn btn-success shadow justify-content-center d-flex m-2 rounded-pill"
                        type="submit" name="delete_prod" value = "♻️" onclick="return confirm('Confirm deleting, please!!')">
                <input class="flex-fill px-3 py-1  btn btn-success shadow justify-content-center d-flex m-2 rounded-pill"
                        type="submit" value = "✘">
            </div>
        <?php 
        endforeach;  
        ?>
    </form>
</div>
</div>