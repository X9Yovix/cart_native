<?php
require_once("../mysql/BDConnection.php");
require_once("GS_Register.php");


class ModelRegister
{
    private $conx;

    function __construct()
    {
        $obj = new BDConnection();
        $this->conx = $obj->getConnection();
    }

    function createUser(Register $reg)
    {
        $user = $reg->getUser();
        $password = $reg->getPassword();
        $email = $reg->getEmail();
        $sql_c = "INSERT INTO users values(DEFAULT,'$user','$password','$email')";
        $res = $this->conx->exec($sql_c);
        return $res;
    }

    function verifyUserExist($user_reg, $password_reg)
    {
        $sql_v = "SELECT * FROM users WHERE username='$user_reg' AND password='$password_reg'";
        $res = $this->conx->query($sql_v);
        $User = $res->rowCount();
        return $User;
    }
}
