<?php
class Videojuegos{
    protected $id;
    protected $nombre;
    protected $id_categoria;
    protected $compania;
    protected $lanzamiento;
    protected $plataforma;
    protected $bajada;
    protected $img1;
    protected $link;
    protected $tiene;


 public function lista_completa() {
            
        $resultado = [];

      
        $conexion = (new Conexion())->getConexion();

        
        $query = "SELECT * FROM videojuegos";


        $PDOStatament = $conexion->prepare($query);
        $PDOStatament->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatament->execute();

      
        $resultado = $PDOStatament->fetchAll();

        return $resultado;
        
    }


     public function catalogo_x_categoria(int $id_categoria)
    {

        $catalogo = [];

        //1- Llamar a la conexion

        $conexion = (new conexion())->getConexion();

        //2- query
        $query = "SELECT * FROM videojuegos WHERE id_categoria = $id_categoria";

        //3- Preparar la conexion

        $PDOStatament = $conexion->prepare($query);

        //4- Llamar a la clase COMIC

        $PDOStatament->setFetchMode(PDO::FETCH_CLASS, self::class);

        //5- ejecutar la consulta 

        $PDOStatament->execute();

        //6- Convertir lo que viene desde mysql en un array asociativo

        $catalogo = $PDOStatament->fetchAll();

        return $catalogo;
    }


    //Metodo datos en particular

      public function get_x_id(int $id) {


        $conexion = (new Conexion())->getConexion();

        
        $query = "SELECT * FROM videojuegos WHERE id = :id";


    

        $PDOStatament = $conexion->prepare($query);
        $PDOStatament->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatament->execute(
            [
                "id" => $id
            ]
        );

    
        $result = $PDOStatament->fetch();

        if(!$result){
            return null;
        }

        return $result;
        
        

    }


    /* Categoria */

      public function getCategoria() {
       $categoria = (new Categoria())->get_x_id($this->id_categoria);
       $nombre = $categoria->getNombre();
       return $nombre;
    }

    


    /* Metodo para insertar un nuevo videojuego a la BD */

    public function insert($nombre,$id_categoria, $compania, $lanzamiento,$plataforma,$bajada,$img1,$link,$tiene){

         $conexion = (new Conexion())->getConexion();

         $query = "INSERT INTO videojuegos(id, nombre,id_categoria, compania, lanzamiento,plataforma,bajada,img1,link,tiene) VALUES(NULL, :nombre,:id_categoria, :compania, :lanzamiento, :plataforma, :bajada, :img1, :link, :tiene) " ;

         $PDOStatament = $conexion->prepare($query);
         $PDOStatament->execute(
            [
                'nombre' => $nombre,
                'id_categoria' => $id_categoria,
                'compania' => $compania,
                'lanzamiento' => $lanzamiento,
                'plataforma' => $plataforma,
                'bajada' => $bajada,
                'img1' => $img1,
                'link' => $link,
                'tiene' => $tiene
            ]
        );

    }


    public function edit($nombre,$id_categoria,$compania, $lanzamiento,$plataforma,$bajada,$link,$tiene,$id){

         $conexion = (new Conexion())->getConexion();

         $query = "UPDATE videojuegos SET nombre = :nombre, id_categoria = :id_categoria, compania = :compania, lanzamiento = :lanzamiento, plataforma = :plataforma, bajada = :bajada, link = :link, tiene = :tiene WHERE id = :id " ;

         $PDOStatament = $conexion->prepare($query);
         $PDOStatament->execute(
            [
                'id' => $id,
               'nombre' => $nombre,
                'id_categoria' => $id_categoria,
                'compania'=> $compania,
                'lanzamiento' => $lanzamiento,
                'plataforma' => $plataforma,
                'bajada' => $bajada,
                'link' => $link,
                'tiene' => $tiene
            ]
        );

    }

  public function reemplazar_imagen($img1, $id){

         $conexion = (new Conexion())->getConexion();

         $query = "UPDATE videojuegos SET img1 = :img1 WHERE id = :id " ;

         $PDOStatament = $conexion->prepare($query);
         $PDOStatament->execute(
            [
                'id' => $id,
                'img1' => $img1
                
            ]
        );

    }


      public function delete(){

         $conexion = (new Conexion())->getConexion();

         $query = "DELETE FROM videojuegos WHERE id = :id" ;

         $PDOStatament = $conexion->prepare($query);
         $PDOStatament->execute(
            [
                
                'id' => $this->id
                
            ]
        );

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
     * Get the value of id_categoria
     */ 
    public function getId_categoria()
    {
        return $this->id_categoria;
    }

    /**
     * Get the value of lanzamiento
     */ 
    public function getLanzamiento()
    {
        return $this->lanzamiento;
    }

    /**
     * Get the value of plataforma
     */ 
    public function getPlataforma()
    {
        return $this->plataforma;
    }

    /**
     * Get the value of bajada
     */ 
    public function getBajada()
    {
        return $this->bajada;
    }

    /**
     * Get the value of img1
     */ 
    public function getImg1()
    {
        return $this->img1;
    }

    /**
     * Get the value of link
     */ 
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Get the value of tiene
     */ 
    public function getTiene()
    {
        return $this->tiene;
    }

    /**
     * Get the value of compania
     */ 
    public function getCompania()
    {
        return $this->compania;
    }
}








?>