<?php
/**
* @author Enric Beltran
* @author enricbeltran@iesmontsia.org
*/

/**
* Classe Stock
*
* En aquesta classe tenim els metodes necessaris per a crear, eliminar
* i saber el stock que tenim de cada llibre.
*
*/
class Stock
{
  private $id_llibre;

  function __construct()
  {
    $args = func_get_args();
    $num = func_num_args();
    $f='__construct'. $num;
    /*Important que ens fixesim en el nº de parametres que passem
    per a donarli de nom al contructor __construct + el nº de parametres*/
    if (method_exists($this,$f)) {
      call_user_func_array(array($this,$f),$args);
    }
  }
  function __construct1($id)
  {
    $this->id_llibre=$id;
  }
  /**
   * En aquest punt tindriem el Summary on recollim que fa la funció aquesta
   *fucnió ens serveix per a insrir Stock.


   * La "Description", pot esta formada per moltes linies, per a conseguir
   * una descripcio molt mes detallada del element
   *
   * @return boolean $result aquest seria el resultat de la funció i el tipus
   * de dada que retorna, i podriem afegir una explicació d'aquest argument
   * que es el resultat de la conexio a la Base de Dades
   */
  function inserirStock(){
    include ("../php/conexio.php");

    @$conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    $sql ="INSERT INTO exemplar (id_llibre)
    VALUES ('$this->id_llibre')";//Genero sentencia SQL

      $result = $conexion->query($sql);//Retorno resultat de la conexio si ha funcionat o no

    if ($result===TRUE) {//Comprobem que s'ha introduit satisfactoriament
      echo "S'ha inserit el Stock correctament";
    }else{
      echo "Error: ".$sql." <br />".$conexion->error;
    }

    return $result;
    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
  public static function getStock($id){
    include ("../php/conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    $sql="SELECT * from exemplar where id_llibre = (".$id.");"; //Importem els usuaris

    $result = $conexion->query($sql); //Utilitzem la conexio per a donar un resultat

    $rowcount=mysqli_num_rows($result);
    return $rowcount;

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
  public static function getStocks($id){
    include ("../php/conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    $sql="SELECT * from exemplar where id_llibre = (".$id.");"; //Importem els usuaris

    $result = $conexion->query($sql); //Utilitzem la conexio per a donar un resultat

    return $result;

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
  public static function esborrarStock($id){
    include ("../php/conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }
    echo $id;
    $sql ="DELETE FROM exemplar where id = $id;";

    $result = $conexion->query($sql);//Retotno resultat de la conexio si ha funcionat o no

    if ($result===TRUE) {//Comprobem que s'ha introduit satisfactoriament
      echo "S'ha eliminat el Stock correctament";
    }else{
      echo "Error: ".$sql." <br />".$conexion->error;
    }

    return $result;
    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
  public static function esborrarStocks($id){
    include ("../php/conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    $sql ="DELETE FROM exemplar where id_llibre = $id;";

    $result = $conexion->query($sql);//Retotno resultat de la conexio si ha funcionat o no

    if ($result===TRUE) {//Comprobem que s'ha introduit satisfactoriament
      echo "S'ha eliminat el Stock correctament";
    }else{
      echo "Error: ".$sql." <br />".$conexion->error;
    }

    return $result;
    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
}

?>
