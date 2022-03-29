<div id = "div_temp">
       <div class = "p-3 mt-2 mb-4 mx-5 bg-info rounded">
              <form class = "d-flex flex-column border rounded p-2" method = "POST">
                     <input class="px-3 py-1 shadow justify-content-center d-flex my-1 border border-1 border-primary rounded-pill"
                            name = "ref" type = "text" placeholder = "Reference" required>
                     <input class="px-3 py-1 shadow justify-content-center d-flex my-1 border border-1 border-primary rounded-pill"
                            name = "name" type = "text" placeholder = "Product Name" required>
                     <input class="px-3 py-1 shadow justify-content-center d-flex my-1 border border-1 border-primary rounded-pill"
                            name = "descipt" type = "text" placeholder = "Description" required>
                     <input class="px-3 py-1 shadow justify-content-center d-flex my-1 border border-1 border-primary rounded-pill"
                            name = "stock" type = "number" placeholder = "Stock" required>
                     <input class="px-3 py-1 shadow justify-content-center d-flex my-1 border border-1 border-primary rounded-pill"
                            name = "priceSell" type = "number" placeholder = "Price Sell" step="0.01" required>
                     <input class="px-3 py-1 shadow justify-content-center d-flex my-1 border border-1 border-primary rounded-pill"
                            name = "priceBuy" type = "number" placeholder = "Price Buy" step="0.01" required>
                     <div class = "d-flex flex-row flex-wrap">
                            <div class = "px-5 py-1 my-1">
                                   <p class = "fs-2">🧪<input name = "type" type = "radio" value = "e-liquide" checked></p>
                            </div> 
                            <div class = "px-5 py-1 my-1"> 
                                   <p class = "fs-2">🚬<input name = "type" type = "radio" value = "vapoteuse"></p>
                            </div>
                     </div>
                     <div class = "d-flex flex-row mt-2 flex-wrap">
                            <div class = "d-flex flex-fill pe-1">
                                   <input class = "flex-fill py-2  btn btn-success shadow justify-content-center d-flex my-1 border rounded-pill"
                                          name = "insert" type = "submit" value = "✔">
                            </div>
                            <div class = "d-flex flex-fill ps-1">
                                   <input class = "flex-fill py-2  btn btn-success shadow justify-content-center d-flex my-1 border rounded-pill"
                                          type = "button" value = "✘" onclick = "delet_all()" readonly">
                            </div>
                     </div>
              </form>
       </div>
</div>

