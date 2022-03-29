<?php
session_start(); 
$user_id = "'".$_SESSION['id']."'";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Vap Factory Stock Gestion</title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/vapFactStock.css" /> -->
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

      <h1 class = "mt-4 pt-5 ms-5">Personnel Informations for :<?php echo " ".$_SESSION['username'] ?></h1>
      <div class = "bg-info border rounded-3 p-3 mx-5 my-3">
          <?php 

          include 'composant/config.php';

          $sql_getPerso = $bdd -> prepare("SELECT * FROM users WHERE id = $user_id");
          $check = $sql_getPerso -> execute();
          $row_user = $sql_getPerso -> fetchAll();
          if (!$check) {echo "Problem while connecting for personnel informations.";}

          $bdd = null;
          ?>

          <form class = "border p-2 d-flex flex-column" method = "POST" action = "modifPersoExec.php">
          <?php
              foreach ($row_user as $user_detail): ?>
                  <div class = "d-flex flex-fill flex-wrap">
                      <div class = "d-flex flex-column flex-fill">
                          <div class = "px-3 m-2">
                              <h3>ACTIF<h3>
                          </div>
                          <div class = "d-flex flex-column flex-fill">
                                <input class = "bg-dark text-white  flex-fill px-3 py-1 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                        name = "old_name"  value = "<?php echo $user_detail['user_name']; ?>" readonly>
                                <input class = "bg-dark text-white  flex-fill px-3 py-1 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                        name = "old_email" value = "<?php echo $user_detail['user_mail']; ?>" readonly>
                          </div>
                      </div>
                      <div class = "d-flex flex-column flex-fill">
                          <div class = "px-3 m-2">
                              <h3>NEW</h3>
                          </div>
                          <div class = "d-flex flex-fill flex-column">
                              <input class="flex-fill px-3 py-1 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                      name = "user_name" type = "text" placeholder = "new Name">
                              <input class="flex-fill px-3 py-1 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                      name = "new_email" type = "text" placeholder = "new Mail">
                          </div>
                      </div>
                  </div>
                  <div class = "d-flex flex-fill flex-column mb-3">
                      <div class = "px-3 mt-5 mx-2 ">
                          <h3>PASSWORD</h3>
                      </div>
                      <div class = "d-flex flex-fill flex-wrap">
                          <input class = "flex-fill px-3 py-1 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                  name = "new_password_01" type = "password" placeholder = "New Password">
                          <input class = "flex-fill px-3 py-1 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                                  name = "new_password_02" type = "password" placeholder = "Confirm New Password">
                      </div>
                  </div>
                  <div class = "d-flex flex-fill mt-5 flex-wrap">
                      <input class="flex-fill px-3 py-1 shadow justify-content-center d-flex m-2 border border-1 border-primary rounded-pill"
                              name = "old_password" type = "password" required placeholder = "Actif Password">
                      <input class="flex-fill px-3 py-1  btn btn-success shadow justify-content-center d-flex m-2 rounded-pill"
                              type="submit" name="subChangePerso" value = "✔">
                  </div>
              <?php 
              endforeach;  
              ?>
          </form>
      </div>
  </body>
</html>