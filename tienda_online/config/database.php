<?php

 class Database {

    private $hostname = "localhost:3307";
    private $database = "tienda_online";
    private $username = "root";
    private $password = "";
    private $charset = "utf8";

    function conectar()
    {
        try{
        $conexion = "mysql:host=" . $this->hostname . "; dbname=" . $this->database . "; charset=" . $this->charset;
        $option = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        ];

        $pdo = new PDO($conexion, $this->username, $this->password, $option);

        return $pdo; 

    } catch(PDOException $e) {
        echo 'Error conexion: ' . $e->getMessage(); 
        exit;

    }
    }      
 }

?>