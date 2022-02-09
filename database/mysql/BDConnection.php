<?php
class BDConnection
{
    function getConnection()
    {
        try {
            $user = "root";
            $password = "";
            $dsn = "mysql:host=localhost;dbname=e_basket";

            $conx = new PDO($dsn, $user, $password);
            return $conx;
        } catch (Exception $e) {
            echo "connection failed" . $e->getMessage();
        }
    }
}
