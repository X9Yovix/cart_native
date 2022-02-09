<?php

require_once("../Model/Model_Register.php");
require_once("../Model/GS_Register.php");
session_start();

$f = new ModelRegister();
$reg = new Register();
include('../View/login.php');
//var_dump($_SESSION['user_log']);

if (isset($_POST["register"])) {
    $user_reg = htmlspecialchars($_POST["user_reg"]);
    $password_reg = htmlspecialchars($_POST["password_reg"]);
    $email_reg = htmlspecialchars($_POST["email_reg"]);



    if (empty($user_reg) || empty($password_reg) || empty($email_reg)) {
        echo ('<script>alert("fields are empty");</script>');
    } elseif (!filter_var($email_reg, FILTER_VALIDATE_EMAIL)) {
        echo ('<script>alert("Invalid email format");</script>');
    } else {
        $reg->setUser($user_reg);
        $reg->setPassword($password_reg);
        $reg->setEmail($email_reg);

        $verif_user = $f->verifyUserExist($user_reg, $password_reg);
        if ($verif_user == 0) {
            $success = $f->createUser($reg);
            echo ('<script>alert("Account Created");</script>');
        } else {
            echo ('<script>alert("User Already Exist");</script>');
        }
    }
}

if (isset($_POST["login"])) {
    $user_log = htmlspecialchars($_POST["user_log"]);
    $password_log = htmlspecialchars($_POST["password_log"]);
    //$_SESSION['user_log'] = $user_log;
    $verif_user = $f->verifyUserExist($user_log, $password_log);
    if ($verif_user > 0) {
        $_SESSION['user_log'] = $user_log;
        //$_SESSION["user_log"] = array("id"=>$reg->getUser());
        //$_SESSION["user_log"] = array("id"=>$user_log);
        //print_r($_SESSION['user_log']);
        //echo ('<script>alert("'.print_r($_SESSION["user_log"]).'");</script>');
        //$_SESSION['password_log'] = $password_log;
        //header("location:index.php");
        echo "<script>window.location.href='index.php';</script>";
        //exit();
    } else {
        echo ('<script>alert("User or password are incorrect");</script>');
    }
}
