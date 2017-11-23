<?php
/**
 *
 */
 include_once("conexio.php");
class autor
{
  private $nom;

  function __construct()
  {
    $args = func_get_args();
    $num = func_num_args();
    $f='__construct'. $num;
    if (method_exists($this,$f)) {
      call_user_func_array(array($this,$f),$args);
    }
  }
  function __construct1($nom)
  {
    $this->$nom=$nom;
  }
  function __construct2()
  {

  }
  /*function __construct3($a1,$a2,$a3)
  {
    echo "__construct con 3 params llamado: " . $a1 . "," . $a2 . "," . $a3;
  }
*/
  function inserirGenere($nom){
    $conexion = new mysqli();
    @$conexion->connect($server, $username, $password, $database);

    if ($conexion->connect_error){//Comprobo que podem establir conexió sino mostro error
      die('Error de conexión: ' . $conexion->connect_error);
    }

    $sql ="INSERT INTO genere (nom) VALUES ($this->nom)";//Genero sentencia SQL

    $result = $conexion->query($sql);//Retotno resultat de la conexio si ha funcionat o no

    if ($conexion->query($sql)===TRUE) {//Comprobem que s'ha introduit satisfactoriament
      echo "S'ha inserit el genere correctament";
    }else{
      echo "Error: ".$sql." <br />".$conexion->error;
    }
    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
  function getGeneres(){
    $conexion = new mysqli();
    @$conexion->connect($server, $username, $password, $database);

    if ($conexion->connect_error){
      die('Error de conexión: ' . $conexion->connect_error);
    }
    $sql="SELECT * from genere"; //Importem els usuaris

    $result = $conexion->query($sql); //Utilitzem la conexio per a donar un resultat

    if ($result->num_rows > 0){ //Si la consulta ens retorna alguna linia (Si en retorna ho posa en un array)
      while ($row = $result->fetch_array()){//Mentre que poguesim agafar elements del array
        echo "<pre>";

      }
    }
  }
  function esborrarGeneres(){

  }
}

?>
