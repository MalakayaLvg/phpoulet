<?php
require_once "templates.php";
//require_once "authentification.php";

// ** authentification.php

$isLoggedIn = false;

$usernameCorrect = "oslynx";
$passwordCorrect = "fortnite";

//$password = $_POST["password"];

if(isset($_POST["username"])){
    $username = $_POST["username"];

    if ($username == $usernameCorrect){
        $content1 = "correct username";
//        $isLoggedIn = true;
        if(isset($_POST["password"])){
            $password = $_POST["password"];

            if($password == $passwordCorrect){
                $content1 = "correct password";
                $isLoggedIn = true;
            }
        }
    }
}


// logique de connection   $_POST etc etc

//a la fin ,si la connection est acceptée,
//mettre isLoggedIn en true

// ** END authentification.php

if(!$isLoggedIn){
    $content = $loginForm;
}else{
    require_once "poulet.php";
    $content = $content1;
    $contentPoulet = $content2;

}


