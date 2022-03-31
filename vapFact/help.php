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
        <div class = "mt-5 ms-5 me-5 d-flex flex-column flex-column">
            <div class = "d-flex flex-fill flex-column">
                <p class = "mt-5 d-flex flex-fill">
                    <button class="shadow btn btn-primary rounded-pill flex-fill text-start px-3" type="button" data-bs-toggle="collapse" data-bs-target="#firstConnect" aria-expanded="false" aria-controls="firstConnect">
                        FIRST CONNECTION
                    </button>
                </p>
                <div class="collapse" id="firstConnect">
                    <div class="mb-3 card card-body">
                        <p>
                            You have to 
                            <a class = "text-decoration-none" href = "../index.php">connect</a> with your name and your email. You have to choose a password and confirm it. 
                            If your name and email aren’t used already you’ll get the main menu to use the main programme.  
                        </p>
                    </div>
                </div>  
            </div>
            
            <div class = "d-flex flex-fill flex-column">
                <p class = "d-flex flex-fill">
                    <button class="shadow btn btn-primary rounded-pill flex-fill text-start px-3" type="button" data-bs-toggle="collapse" data-bs-target="#login" aria-expanded="false" aria-controls="login">
                        LOGIN
                    </button>
                </p>
                <div class="collapse" id="login">
                    <div class="mb-3 card card-body ">
                        <p>
                            After a first logout enter your name and your password entered while 
                            <a class = "text-decoration-none" href = "../inscription.php">enregistrement</a>.
                            Be careful when using the camelcase. You’ll get the main menu to continue.

                            You can log out in the navigation bar, on clicking on the buttons 
                            “Change User Name”
                            “Logout”
                        </p>
                        
                    </div>
                </div>
            </div>

            <div class = "d-flex flex-fill flex-column">
                <p class = "d-flex flex-fill">
                    <button class="shadow btn btn-primary rounded-pill flex-fill text-start px-3" type="button" data-bs-toggle="collapse" data-bs-target="#personnel" aria-expanded="false" aria-controls="personnel">
                        PERSONNEL
                    </button>
                </p>
                <div class="collapse" id="personnel">
                    <div class="mb-3 card card-body ">
                        <p>
                            Once logged in, you can click on your pseudo in the navigation bar you’ll get a 
                            <a class = "text-decoration-none" href = "modifPerso.php">formulaire to change your personnels informations</a>
                            You can change all or one information. Always be careful with the placeholder to 
                            know which field needs which information. You have always needed to tape your old 
                            password before sending the changes with the "✔" button. 
                        </p>
                    </div>
                </div>
            </div>
            
            <div class = "d-flex flex-fill flex-column">
                <p class = "d-flex flex-fill">
                    <button class="shadow btn btn-primary rounded-pill flex-fill text-start px-3" type="button" data-bs-toggle="collapse" data-bs-target="#showStock" aria-expanded="false" aria-controls="showStock">
                        SHOW ALL STOCK
                    </button>
                </p>
                <div class="collapse" id="showStock">
                    <div class="mb-3 card card-body ">
                        <p>
                            <a class = "text-decoration-none" href = "viewStock.php">Show stock</a> shows you all references you have with or without stock and all types. You can filter the table.:
                            Choose a type and a direction of the other columns.<br> 
                            <strong>To delete a reference:<br></strong>
                            Click on the button "♻️" at the last column at the ligne and you’ll delete. Click at the "🔄" button to show the table updated.<br>
                            <strong>Modify a reference:<br></strong>
                            Click on the button with the reference you want to modify.
                            You’ll get the “MODIFY” page <strong>with the formulaire</strong>... 
                        </p>
                    </div>
                </div>
            </div>

            <div class = "d-flex flex-fill flex-column">
                <p class = "d-flex flex-fill">
                    <button class="shadow btn btn-primary rounded-pill flex-fill text-start px-3" type="button" data-bs-toggle="collapse" data-bs-target="#modifRef" aria-expanded="false" aria-controls="modifRef">
                        MODIFY REFERENCE
                    </button>
                </p>
                <div class="collapse" id="modifRef">
                    <div class="mb-3 card card-body">
                        <p>
                            To modify a reference you’ve to enter the right reference in the
                            <a class = "text-decoration-none" href = "modifProd.php">search field</a>. 
                            Once done, click on the pencil for submitting and getting the formulaire for the changes. 
                            Tape the changes at the fields you want to submit. You can change all fields or one. 
                            <strong>The stock entry does not allow coma, dot or negative numbers.
                            The price sell and price buy allows only two numbers after a dot or coma.</strong>
                            If you don't add a comma or a dot in the base it will be added automaticly
                            (exp: 5 -> 5.00 or 5.1 -> 5.10).<br>
                            Once you’re sure of your new 
                            information click on the '✔' button. Else you can cancel by the “✘” button. 
                            And if you wish to delete the reference so click at the recycle button.

                            Otherwise, if the reference isn’t existing you’ll get a choice for adding à new reference. 
                            You can cancel by clicking on the “✘” button else you’ll get the “adding formulaire”.

                            The “♻️” button allows you to delete the reference.
                        </p>
                    </div>
                </div>
            </div>

            <div class = "d-flex flex-fill flex-column">
                <p class = "d-flex flex-fill">
                    <button class="shadow btn btn-primary rounded-pill flex-fill text-start px-3" type="button" data-bs-toggle="collapse" data-bs-target="#addRef" aria-expanded="false" aria-controls="addRef">
                        ADD REFERENCE
                    </button>
                </p>
                <div class="collapse" id="addRef">
                    <div class="mb-3 card card-body">
                        <p>
                            You got the add possibility on the pages 
                            <a class = "text-decoration-none" href = "modifProd.php">MODIFY</a> and 
                            <a class = "text-decoration-none" href = "recepProd.php">RECEPTION</a>. You’ve to click on the 
                            button “ADD NEW REFERENCE” and you’ll get the formulaire. ALL entries are necessary. 
                            <strong>The stock entry does not allow coma, dot or negative numbers.
                            The price sell and price buy allows only two numbers after a dot or coma.</strong>
                            If you don't add a comma or a dot in the base it will be added automaticly
                            (exp: 5 -> 5.00 or 5.1 -> 5.10). 
                            Click to the "✔" to submit and add the reference into the database or click on the 
                            "✘" button to cancel.
                        </p>
                    </div>
                </div>
            </div>

            <div class = "d-flex flex-fill flex-column">
                <p class = "d-flex flex-fill">
                    <button class="shadow btn btn-primary rounded-pill flex-fill text-start px-3" type="button" data-bs-toggle="collapse" data-bs-target="#reception" aria-expanded="false" aria-controls="reception">
                        RECEIVE REFERENCE
                    </button>
                </p>
                <div class="collapse" id="reception">
                    <div class="mb-3 card card-body">
                        <p>
                            At the page 
                            <a class = "text-decoration-none" href = "recepProd.php">RECEPTION</a> you have to enter the reference you want to recipe.
                            You’ll get sommes information from the reference like the reference, 
                            the name and the stock actually from your product. 
                            In the white field “quantity to receive" you have to add the quantity to receive.<br>
                            <strong>This field allows only whole positive numbers.</strong><br>
                            Submit the value with the “✔” button and you'll get confirmation with the product updated.
                            Otherwise you can cancel with the “✘” button.
                        </p>
                    </div>
                </div>
            </div>

            <div class = "d-flex flex-fill flex-column">
                <p class = "d-flex flex-fill">
                    <button class="shadow btn btn-primary rounded-pill flex-fill text-start px-3" type="button" data-bs-toggle="collapse" data-bs-target="#deletetProd" aria-expanded="false" aria-controls="deletetProd">
                        DELETE REFERENCE 
                    </button>
                </p>
                <div class="collapse" id="deletetProd">
                    <div class="mb-3 card card-body">
                        <p>
                            You can delete à product in two ways.<br> 
                            At the page 
                            <a class = "text-decoration-none" href = "viewStock.php">STOCK</a> in the table at the last column in clicking on the button “♻️”. 
                            You have to confirm it and to click at the button “🔄”.<br>
                            At the page 
                            <a class = "text-decoration-none" href = "modifProd.php">MODIFY</a> you can enter the reference to delete. Click on the button “✏️”. 
                            At the bottom of the formulaire you have the button  “♻️” to delete the reference.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'composant/footer.php';
        ?>
    </body>
    
</html>

