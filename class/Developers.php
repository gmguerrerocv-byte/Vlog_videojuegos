<?php



class Developers {

    protected $id;
    protected $nombre;
    protected $img1;
    protected $email;

    
public function lista_completa() {
            
        $resultado = [];

      
        $conexion = (new Conexion())->getConexion();

        
        $query = "SELECT * FROM developers";


        $PDOStatament = $conexion->prepare($query);
        $PDOStatament->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatament->execute();

      
        $resultado = $PDOStatament->fetchAll();

        return $resultado;
        
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of img1
     */ 
    public function getImg1()
    {
        return $this->img1;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }
}



?>

