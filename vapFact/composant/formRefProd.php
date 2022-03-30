<div id="div_table_stock" class="container-fluid">
      <div class = "container-fluid">
        <h2 class = "mx-4">Please enter a reference to continue.</h2>
        <form method="POST">
          <div class = "mx-3  d-flex flex-column">
            <input class = "shadow btn btn-light px-3 mx-3 mt-3 mb-1 flex-fill border border-1 border-primary rounded-pill fw-bolder" 
                    id="prod_ref_input" type="text" name="prod_ref" placeholder ="Reference">
            <input class = "shadow shadow btn btn-success px-3 mx-3 mt-2 mb-3 flex-fill border border-1 rounded-pill" 
                    type="submit" name = "submit_form_ref_prod" value= "✏️" onclick="resetInput()" onclick="delet_all()"> 
          </div>
          <div id = "div_add_prod" class = "d-flex mx-3 mt-4">
          <input class = "shadow shadow btn btn-success px-3 m-3 flex-fill border border-1 rounded-pill" 
                  type="submit" name = "submitNew" value= "ADD NEW REFERENCE" onclick="delet_all()">
          </div>
        </form>
      </div>  
    </div>