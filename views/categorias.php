<?php



$juegoSeleccionado = isset($_GET['cat']) ? $_GET['cat'] : FALSE;

$juegos = new Videojuegos();


$juego = $juegos->catalogo_x_categoria($juegoSeleccionado);


$nombre = (new Categoria())->get_x_id($juegoSeleccionado);

/* Count: cuenta los productos ue estan dentro de mi array, si es mayor a 0 trae algun producto */







?>

<h1 class="text-center my-5 text-warning pt-5 border-bottom border-warning border-2">Juegos de <?=  $nombre->getNombre() ?> </h1>


<div class="row">
    <?php if (count($juego)) { ?>
        <?php foreach ($juego as $j) { ?>
            <div class="col-4 my-5 ">

                <div class="card bg-info border border-warning border-5 " style="width: 18rem;">
                    <img height="400px" src="img/juegos/<?= $j->getImg1() ?>" class="card-img-top" alt="Imagen de juego">
                    <div class="card-body">
                        <h5 class="card-title"><?= $j->getNombre() ?></h5>                        
                    </div>
                    <div class="card-body bg-white">
                        <p class="card-text"><?= substr($j->getNombre(), 0,60) ?>...</p>
                    </div>
                    <div class="card-body">
                      <a href="index.php?sec=juego&id=<?=$j->getId() ?>" class="btn btn-warning w-100 fw-bold">Ver Mas</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>

        <div class="col-12">
            <h2 class="text-center text-danger mb-5">No se encontraron los juegos</h2>
        </div>
z
    <?php } ?>


</div>



<?php

class Categorias {
    
   protected $id;
   protected $nombre;



public function getId_categoria(int $id, string $nombre)
    {

        $conexion = (new conexion())->getConexion();

      
        $query = "SELECT * FROM categorias WHERE id = :id ";

 

        $PDOStatament = $conexion->prepare($query);
        $PDOStatament->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatament->execute(
            [
                "id " => $id,
                "nombre" => $nombre

            ]
        );

        $result = $PDOStatament->fetch();

        if (!$result) {
            return null;
        }

        return $result;
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