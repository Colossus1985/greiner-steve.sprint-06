<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: inscription.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: inscription.php");
  }
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
    <nav class="navbar navbar-expand-md navbar-dark bg-dark px-md-5">
      <div class="container-fluid ps-md-0"> 
        <div class = " d-flex flex-row justify-content-around align-items-center">
          <a class = "text-white me-3" ><strong><?php echo $_SESSION['username']; ?></strong></a>
          <a href="index.php?logout='1'" class = "text-light text-decoration-none">Logout</a>
        </div>
      </div>
    </nav>
    <div class = "m-3 d-flex justify-content-center">
      <h2>VAP FACTORY Stock management</h2>
    </div>  
    <div class="content">
  	<!-- notification message -->
      <!-- <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
          <h3>
            <?php 
              echo $_SESSION['success']; 
              unset($_SESSION['success']);
            ?>
          </h3>
        </div>
      <?php endif ?> -->

    <!-- logged in user information -->
      <?php  if (isset($_SESSION['username'])) : ?>
        <div class = "m-3 d-flex flex-row justify-content-center">
          <div class = "mx-2 align-self-center">
            <h3 class = "">Welcome</h3>
          </div>
          <div class = "mx- align-self-center">
            <h3 class = ""></strong ><?php echo $_SESSION['username']." id: ".$_SESSION['id']; ?></strong></h3>
          </div>
        </div>
      <?php endif ?>
    </div>

    <div class="m-3 px-5 flex-column ">
      <a class="shadow justify-content-center d-flex m-3 border border-3 border-primary rounded-pill p-1 text-decoration-none btn btn-primary" href = "vapFact/viewStock.php">Show Stock</a>
      <a class="shadow justify-content-center d-flex m-3 border border-3 border-primary rounded-pill p-1 text-decoration-none btn btn-primary" href = "vapFact/modifProd.php">Modification Stock</a>
      <a class="shadow justify-content-center d-flex m-3 border border-3 border-primary rounded-pill p-1 text-decoration-none btn btn-primary" href = "vapFact/recepProd.php">Reception</a>
      <a class="shadow justify-content-center d-flex m-3 border border-3 border-primary rounded-pill p-1 text-decoration-none btn btn-primary" href = "vapFact/modifPerso.php">User Informations</a>
      <a class="shadow justify-content-center d-flex m-3 border border-3 border-primary rounded-pill p-1 text-decoration-none btn btn-primary" href = "index.php?logout='1'">Change User Name</a>
      <a class="shadow justify-content-center d-flex m-3 border border-3 border-primary rounded-pill p-1 text-decoration-none btn btn-primary" href = "index.php?logout='1'">Logout</a>
      

    </div>
  </body>
</html>
