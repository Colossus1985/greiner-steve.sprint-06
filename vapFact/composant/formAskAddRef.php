<div id = "div_form_add_prod" class = "px-5 py-3">
    <div class = "py-3 d-flex flex-column bg-info px-3 border rounded-3">
        <div class ="align-self-center fw-bold fs-4">
            <?php echo "The product [" . $prod_ref . "] does not exist. Do you want to add it?"; ?>
        </div>  
        <form class = "d-flex flex-row my-3" method = "POST" action = "modifProd.php">
            <div class = "d-flex flex-fill mx-2">
                <input class = "shadow btn btn-success px-3  border border-1 rounded-pill flex-fill" 
                        type="submit" name ="submitNew" value = "✔">
            </div>
            <div class = "d-flex flex-fill mx-2">
                <input class = "shadow btn btn-success px-3  border border-1 rounded-pill flex-fill" 
                        type="submit" onclick = "delet_all()" value = "✘">
            </div>
        </form>
    </div>
</div>