
<nav class="navbar navbar-expand-md navbar-dark bg-dark px-md-5 fixed-top">
    <div class="container-fluid ps-md-0">
        <div>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mt-1 d-flex justify-content-start">
                <a class="navbar-brand text-white" href="viewStock.php">Show</a>
                <a class="navbar-brand text-white ms-3" href="modifProd.php">Modify</a>
                <a class="navbar-brand text-white ms-3" href="recepProd.php">Reception</a>
                <a class="navbar-brand text-white ms-3" href="modifPerso.php">Personnel</a>
                <a class="navbar-brand text-white ms-3" href="help.php">Help</a>
            </div>
        </div>
        <div class = " d-flex flex-row justify-content-around align-items-center">
            <a class="navbar-brand text-white" href="../index.php"><?php echo "  🏡  "; ?></a>
            <a class = "text-white me-3" href = "modifPerso.php" ><strong><?php echo $_SESSION['username']; ?></strong></a>
            <a href="../index.php?logout='1'" class = "text-light text-decoration-none">Logout</a>
        </div>
    </div>
</nav>