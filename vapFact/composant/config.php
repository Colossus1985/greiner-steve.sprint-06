<?php                                  
    // $host = "localhost";             
    // $bdd_name = "vap_factory";       
    // $indentifiant = "root";           
    // $password = "";     
    

//###---developpent---############################
$host_dev = "localhost";             
$bdd_name_dev = "sprint-06"; 
$indentifiant_dev = "sprint_06";           
$password_dev = "sprint_06"; 
//###---production---############################
$host_prod = "109.234.164.161";             
$bdd_name_prod = "sc1lgvu9627_greiner-steve.sprint-06"; 
$indentifiant_prod = $_SERVER['DB_USER'];           
$password_prod = $_SERVER['DB_PASSWORD']; 

try {
    if (strcmp($_SERVER['ENVIRONNEMENT_TYPE'], "developement") == 0) {
        $bdd = new PDO(
            "mysql:host=$host_dev; dbname=$bdd_name_dev; charset=utf8", 
            $indentifiant_dev, 
            $password_dev);
        $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    if (strcmp($_SERVER['ENVIRONNEMENT_TYPE'], "production") == 0) {
        $bdd = new PDO(
            "mysql:host=$host_prod; dbname=$bdd_name_prod; charset=utf8", 
            $indentifiant_prod, 
            $password_prod);
        $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
} catch (Exception $e) {
    die('Erreur : ' . $e -> getMessage());
}

?>