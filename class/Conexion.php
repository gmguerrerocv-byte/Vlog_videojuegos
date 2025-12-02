<?php

class Conexion {
  
  //atributos --> constantes
  //coneion PDO (no funciona mysqli con PDO)

  public const DB_SERVER ="localhost";
  public const DB_USER ="root";
  public const DB_PASS ="";
  public const DB_NAME ="vlog_videojueos_los_frikis";

  const DB_DNS ="mysql:host=" . self::DB_SERVER . ";dbname=" . self::DB_NAME .";charset=utf8mb4";
   
  // atributo tipo POO

  protected PDO $db;

  public function __construct() {
    
    try {
        $this->db = new PDO(self::DB_DNS, self::DB_USER, self::DB_PASS);
    } catch (\Throwable $th) {
        die("Error al conectar la base de datos");
    }
  

  } 

  public function getConexion() {
     return $this->db;
     
  }

} 



?>