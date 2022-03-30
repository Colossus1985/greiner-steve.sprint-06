<?php                                  
// $host = "localhost";             
// $bdd_name = "vap_factory";       
// $indentifiant = "root";           
// $password = "";     
    
// try {
//     $bdd = new PDO(
//             "mysql:host=$host; dbname=$bdd_name; charset=utf8", 
//             $indentifiant, 
//             $password);
//     $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (Exception $e) {
//     die('Erreur : ' . $e -> getMessage());
// }

try {
    // dev configuration
    if (strcmp($_SERVER['ENVIRONMENT_TYPE'], "development") == 0) {
        $bdd = new PDO(
            'mysql:host=localhost;dbname=vap_factory;charset=utf8',
            'root',
            ''
        );
    }

    // prod configuration
    if (strcmp($_SERVER['ENVIRONMENT_TYPE'], "production") == 0) {
        $bdd = new PDO(
            'mysql:host=109.234.164.161;dbname=sc1lgvu9627_greiner-steve.sprint-06;charset=utf8',
            $_SERVER['DB_USER'],
            $_SERVER['DB_PASSWORD']
        );
    }
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

?>