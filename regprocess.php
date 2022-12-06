<?php
require_once('config.php');
?>

<?php

if(isset($_POST)){
$firstname  = $_POST['firstname'];
$lastname   = $_POST['lastname'];
$email      = $_POST['email'];
$phonenumber= $_POST['phonenumber'];
$password   = $_POST['password'];

    $sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password) VALUES(?,?,?,?,?)";
    $stminsert = $db->prepare($sql);
    $names=array($firstname, $lastname, $email, $phonenumber, $password);
    $result = $stminsert->execute($names);


    if($result){
        echo 'Sign up was successfully saved! Please proceed to LOGIN!';
    }else{
        echo 'There were errors while saving the data.';
    }
}else{
    echo "No data";
}

?>