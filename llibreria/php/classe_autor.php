<?php
class autor
{
  private $nom;
  private $cognom;
  private $pais;
  private $id;

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
    $this->id=$id;
  }
  function __construct4($autor,$nom,$cognom,$pais)
  {
    $this->id=$id;
    $this->nom=$nom;
    $this->cognom=$cognom;
    $this->pais=$pais;
  }
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
  static public function getAutors(){
    include_once ("conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    $sql="SELECT * from autor"; //Importem els usuaris

    $result = $conexion->query($sql); //Utilitzem la conexio per a donar un resultat

    return $result;

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
  function esborrarAutors(){

  }
  function modificarAutors(){
    echo "Eiiiiii";
    include_once ("conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }
    $sql ="UPDATE autor set nom =".$_GET['nom'].", cognom = ".$_GET['cognom'].", pais = ".$_GET['pais']. "where id = (".$this->id.");";
    echo $sql;
    //Genero sentencia SQL
    /*VALUES ('$_GET['nom']', '$_GET['cognom']', '$_GET['pais']') */


    $result = $conexion->query($sql);//Retotno resultat de la conexio si ha funcionat o no

    if ($result===TRUE) {//Comprobem que s'ha introduit satisfactoriament
      echo "S'ha modificat l'autor correctament";
    }else{
      echo "Error: ".$sql." <br />".$conexion->error;
    }

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
}

?>
