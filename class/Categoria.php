<?php



class Categoria
{
    protected $id;
    protected $nombre;

    //Metodo datos en particular

    public function get_x_id(int $id)
    {


        $conexion = (new Conexion())->getConexion();


        $query = "SELECT * FROM categorias WHERE id = :id";




        $PDOStatament = $conexion->prepare($query);
        $PDOStatament->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatament->execute(
            [
                "id" => $id
            ]
        );


        $result = $PDOStatament->fetch();

        if (!$result) {
            return null;
        }

        return $result;
    }



  public function getTitulo($aliasPrimero = False) {

      if($aliasPrimero){
       
      $result = "$this->nombre"; 
      } else{
         $result = "$this->nombre ";
      } 

      return $result;

     }

     public function lista_completa() {
            
        $resultado = [];

      
        $conexion = (new Conexion())->getConexion();

        
        $query = "SELECT * FROM categorias";


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
}


?>