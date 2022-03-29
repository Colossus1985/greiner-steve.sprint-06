function resetInput() {
  const clean_input = document.getElementById("prod_ref_input").value;
  if (clean_input != "" || clean_input != null) {
    clean_input.value = "";
  }
}

function delet_all() {
  console.log("ici2");
  const div_add_new_ref = document.getElementById("div_add_new_ref");
  if (!div_add_new_ref == "") {
    div_add_new_ref.innerHTML = "";
  }
  const div_ask_ref = document.getElementById("div_ask_ref");
  if (!div_ask_ref == "") {
    div_ask_ref.innerHTML = "";
  }
  const div_form_add_prod = document.getElementById("div_form_add_prod");
  if (!div_form_add_prod == "") {
    div_form_add_prod.innerHTML = "";
  }
  const div_temp = document.getElementById("div_temp");
  if (!div_temp == "") {
    div_temp.innerHTML = "";
  }
}
