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
        ici
        <?php
        include 'composant/navabar_logged.php';
        ?>

        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#firstConnect" aria-expanded="false" aria-controls="firstConnect">
            FIRST CONNECTION
        </button>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#login" aria-expanded="false" aria-controls="login">
            LOGGIN
        </button>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#personnel" aria-expanded="false" aria-controls="personnel">
            Personel Informations
        </button>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#showStock" aria-expanded="false" aria-controls="showStock">
            SHOW STOCK
        </button>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#modifRef" aria-expanded="false" aria-controls="modifRef">
            MODIFICATION REFERENCE
        </button>


        <div class="collapse" id="firstConnect">
            <div class="card card-body">
                You have to connect with your name and your email. 
                You have to choose a password and confirm it. 
                If your name and email aren’t used already you’ll get the main menu to use the main programme.
            </div>
        </div>
        <div class="collapse" id="login">
            <div class="card card-body">
                After a first logout enter your name and your password entered while enregistrement.
                Be careful when using the camelcase. You’ll get the main menu to continue.

                You can log out in the navigation bar, onclick to the buttons 
                “Change User Name”
                “Logout”
            </div>
        </div>
        <div class="collapse" id="personnel">
            <div class="card card-body">
                Once logged in, you can click on your pseudo in the navigation bar you’ll 
                get a formulaire to change your personnels informations:
                You can change all or one information. Always be careful with the placeholder to 
                know which field needs which information. You have always needed to tape your old 
                password before sending the changes.
            </div>
        </div>
        <div class="collapse" id="showStock">
            <div class="card card-body">
                Show stock shows you all references you have with or without stock and all types. You can filter the table.:
                Choose a type and a direction of the other columns. 
                delete a reference:
                Click on the button at the last column at the ligne you’ll delete. Click at the refresh button to show the table updated.
                modificate a reference:
                Click on the button with the reference you want to modify.
                You’ll get the “modification Stock” page with the formulaire..
            </div>
        </div>
        <div class="collapse" id="modifRef">
            <div class="card card-body">
                To modify a reference you’ve to enter the right reference in the search field. 
                Once done, click on the pencil for submitting and getting the formulaire for the changes. 
                Tape the changes at the fields you want to submit. You can change all fields or one. Once you’re sure of your new information click on the ‘all right' button. Else you can cancel by the “X” button. And if you wish to delete the reference so click at the recycle button.

                Otherwise, if the reference isn’t existing you’ll get a choice for adding à new reference. 
                You can cancel by clicking on the “X” button else you’ll get the “adding formulaire”.
            </div>
        </div>
    </body>
</html>
