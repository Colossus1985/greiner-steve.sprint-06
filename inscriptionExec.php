<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

function test_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = test_input($_POST['username']);
  $email = test_input($_POST['email']);
  $user_password_1 = test_input($_POST['password_1']);
  $user_password_2 = test_input($_POST['password_2']);

  echo "1: ". "[".$username."]";
  echo "2: ". "[".$email."]";
  echo "3: ". "[".$user_password_1."]";
  echo "4: ". "[".$user_password_2."]";

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($user_password_1)) { array_push($errors, "Password is required"); }
  if ($user_password_1 != $user_password_2) {array_push($errors, "The two passwords do not match");}

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email

  $res = getUser($username, $email);
  var_dump($res);

  if (sizeof($res) > 0) { // if user exists
    foreach ($res as $user):
      if ($user['user_name'] === $username) {
          echo "Username already exists.";
          array_push($errors, "Username already exists");
          header("location: inscription.php");
      }

      if ($user['user_mail'] === $email) {
          echo "email already exists.";
          array_push($errors, "email already exists");
          header("location: inscription.php");
      }
    endforeach;
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    include 'vapFact/composant/config.php';
  	$user_password = password_hash($user_password_1, PASSWORD_DEFAULT);//encrypt the password before saving in the database
    //$user_password = $user_password_1;
  	$sql_reg = $bdd -> prepare("INSERT INTO users (user_name, user_mail, user_password) 
  			                        VALUES('$username', '$email', '$user_password')");
  	$check = $sql_reg -> execute();
    $bdd = null;

    if (!$check) {echo "There was some troubles encountered where enregesting.";}

    $res = getUser($username, $email);
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $res[0]['id'];

    createTable($username, $email);
    header("location: index.php");
  }
}

if (isset($_POST['login_user'])) { 
  if (empty($_POST['username']) || empty($_POST['password'])) {
    if (empty($_POST['username'])) {
        array_push($errors, "Username is required");
        var_dump($errors);
        //header("location: inscription.php");
    } 
    if (empty($_POST['password'])) {
        array_push($errors, "Password is required");
        var_dump($errors);
        //header("location: inscription.php");
    } 
  } else {
    $username = test_input($_POST['username']);
    $user_password = test_input($_POST['password']);
    echo "username [" . $username . "]<br> userpassword [" . $user_password . "]<br>";
  }
    
    if (sizeof($errors) == 0) {

        include 'vapFact/composant/config.php';
        $res = getUser($username, $email);
        $user_password_get = $res[0]['user_password'];
        $table_name = $res[0]['id'];
        
        if (password_verify($user_password, $user_password_get)) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $table_name;
            $_SESSION['success'] = "You are now logged in";
            header("location: index.php");
        } else {
            array_push($errors, "Wrong username/password combination");
            //header('location: inscription.php');
            var_dump($errors);
        }
    } else {
      echo "errors: <br>";
      var_dump($errors);               
    }      
    $bdd = null;
}

function createTable($username, $email) {
    $res = getUser($username, $email);
    $user_id = $res[0]['id'];

    if ($user_id != "" || $user_id != null) {
      $table_name = $user_id;
      
      include 'vapFact/composant/config.php';
      $sql_createTable = $bdd -> prepare("CREATE TABLE `".$table_name."` (
        product_ref VARCHAR(255) NOT NULL UNIQUE,
        product_name VARCHAR(255) NOT NULL,
        product_window BLOB,
        product_stock INT,
        product_buy DOUBLE,
        product_sell DOUBLE,
        product_type text NOT NULL,
        PRIMARY KEY (product_ref)
      )");

      $check = $sql_createTable -> execute();
      if (!$check) {echo "problem to create new product table.";}
      $bdd = null;
    } else {
      echo "User ID not given.";
    }
}

function getUser($username, $email) {
  echo "<br>dans getuser() avec [".$username."] and [".$email."]<br>";
    include 'vapFact/composant/config.php';
    $sql_get_user = $bdd -> prepare("SELECT * FROM users WHERE  user_name = '$username' OR
                                        user_mail = '$email';");
    $check = $sql_get_user -> execute();

    if (!$check) {
      echo "problem to get user informations";
    } else {
      echo "got user information";
    }
    
    $ressql_get_user = $sql_get_user -> fetchAll();
    $bdd = null;
    return $ressql_get_user;
}
?>

