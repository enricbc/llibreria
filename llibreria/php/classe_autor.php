<?php
class autor
{
  private $nom;
  private $cognom;
  private $pais;

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
  function __construct3($nom,$cognom,$pais)
  {
    $this->nom=$nom;
    $this->cognom=$cognom;
    $this->pais=$pais;
  }
  function __construct0()
  {

  }
  /*function __construct3($a1,$a2,$a3)
  {
    echo "__construct con 3 params llamado: " . $a1 . "," . $a2 . "," . $a3;
  }
*/
  function inserirAutor(){
    include_once ("conexio.php");
    @$conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    $sql ="INSERT INTO autor (nom, cognom, pais)
    VALUES ('$this->nom', '$this->cognom', '$this->pais')";//Genero sentencia SQL

    $result = $conexion->query($sql);//Retotno resultat de la conexio si ha funcionat o no

    if ($result===TRUE) {//Comprobem que s'ha introduit satisfactoriament
      echo "S'ha inserit l'autor correctament";
    }else{
      echo "Error: ".$sql." <br />".$conexion->error;
    }
    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
  function getAutors(){
    include_once ("conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    $sql="SELECT * from autor"; //Importem els usuaris

    $result = $conexion->query($sql); //Utilitzem la conexio per a donar un resultat

    if ($result->num_rows > 0){ //Si la consulta ens retorna alguna linia (Si en retorna ho posa en un array)
      while ($row = $result->fetch_array()){//Mentre que poguesim agafar elements del array
        echo "<pre>";
        echo "<input type='checkbox' name'autor'/>";
          for ($i=0; $i < 3; $i++) {
            echo $row[$i]." ";
          }
        echo "</pre>";
      }
    }
    $conexion->close();
  }
  function esborrarAutors(){

  }
}

?>
