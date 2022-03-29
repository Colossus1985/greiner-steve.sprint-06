<?php
session_start(); 
$user_id = "`".$_SESSION['id']."`";

$errors = array();

function test_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

if (isset($_POST['subChangePerso'])) {
    $new_username = test_input($_POST['user_name']);
    $old_name = test_input($_POST['old_name']);

    $new_email = test_input($_POST['new_email']);
    $old_email = test_input($_POST['old_email']);

    $password_1 = test_input($_POST['new_password_01']);
    $password_2 = test_input($_POST['new_password_02']);
    $old_password = test_input($_POST['old_password']);

    //if (!empty($new_username) || empty(!$new_email) || empty(!$password_1)) {
        if ($password_1 == $password_2) {   
            include 'composant/config.php';
            $sql_verifPWD = $bdd -> prepare("SELECT id, user_password FROM users 
                                            WHERE user_name = '$old_name' AND
                                                user_mail = '$old_email'");
            $check = $sql_verifPWD -> execute();
            $res_verifPWD = $sql_verifPWD -> fetchAll();
            $bdd = null;
            $user_id = $res_verifPWD[0]['id'];

            if (password_verify($old_password, $res_verifPWD[0]['user_password'])) {
                if (!empty($password_1)){
                    $new_password = password_hash($password_1, PASSWORD_DEFAULT); 
                } else {
                    $new_password = password_hash($old_password, PASSWORD_DEFAULT);
                }
                if (empty($new_email)) {
                    $new_email = $old_email;
                }
                if (empty($new_username)) {
                    $new_username = $old_name;
                }

                // echo "new_password: " . $new_password . "<br>";
                // echo "new_email: " . $new_email . "<br>";
                // echo "new_username: " . $new_username . "<br>";

                include 'composant/config.php';
                $sql_modifPerso = $bdd -> prepare("UPDATE users 
                                                    SET `user_name`='$new_username',
                                                        `user_mail`='$new_email',
                                                        `user_password`='$new_password' 
                                                    WHERE `id`= $user_id");
                $check = $sql_modifPerso -> execute();
                if (!$check) {
                    echo "Problem to conntect for adding changes.";
                } 
                $bdd = null;
                header('location: modifPerso.php');
                
            } else {
                array_push($errors, "Wrong ancient password");
                header('location: ../index.php');
            }
        } else {
            array_push($errors, "New Password not equal");
            header("location: ../index.php");
        }
    // } else {
    //     array_push($errors, "nothing for up to date");
    //     header("location: ../index.php");
    // }
}

  
