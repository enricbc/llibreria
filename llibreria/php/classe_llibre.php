<?php
/**
 *
 */
class Llibre
{
  private $autor;
  private $titol;
  private $nedicio;
  private $llpubli;
  private $any;
  private $editorial;
  private $isbn;
  private $qexemplars;
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
  function __construct8($autor,$titol,$nedicio,$llpubli,$any,$editorial,$isbn,$qexemplars)
  {
    $this->autor=$autor;
    $this->titol=$titol;
    $this->nedicio=$nedicio;
    $this->llpubli=$llpubli;
    $this->any=$any;
    $this->editorial=$editorial;
    $this->isbn=$isbn;
    $this->qexemplars=$qexemplars;
  }
  function __construct1($id)
  {
    $this->id=$id;
  }
  function __construct9($autor,$titol,$nedicio,$llpubli,$any,$editorial,$isbn,$qexemplars,$id)
  {

    $this->autor=$autor;
    $this->titol=$titol;
    $this->nedicio=$nedicio;
    $this->llpubli=$llpubli;
    $this->any=$any;
    $this->editorial=$editorial;
    $this->isbn=$isbn;
    $this->qexemplars=$qexemplars;
    $this->id=$id;
  }
  function __construct4($autor,$nom,$cognom,$pais)
  {
    $this->id=$autor;
    $this->nom=$nom;
    $this->cognom=$cognom;
    $this->pais=$pais;
  }
  function inserirLlibre(){
    include_once ("conexio.php");
    @$conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    $sql ="INSERT INTO llibre (id_autor, isbn, quantitat, any_edicio, editorial, lloc_publicacio, num_edicio, titol)
    VALUES ('$this->autor', '$this->isbn', '$this->qexemplars', '$this->any', '$this->editorial', '$this->llpubli', '$this->nedicio', '$this->titol')";//Genero sentencia SQL

    $result = $conexion->query($sql);//Retotno resultat de la conexio si ha funcionat o no

    if ($result===TRUE) {//Comprobem que s'ha introduit satisfactoriament
      echo "S'ha inserit el llibre correctament";
    }else{
      echo "Error: ".$sql." <br />".$conexion->error;
    }
    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
  static public function getLlibres(){
    include_once ("../php/conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    $sql="SELECT * from llibre"; //Importem els usuaris

    $result = $conexion->query($sql); //Utilitzem la conexio per a donar un resultat

    return $result;

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
    static public function getLlibre($id){ //Recullo la informacio d'un autor gracies a un id
    include ("../php/conexio.php");
    $conexion = new mysqli();

    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    $sql="SELECT * from llibre where id = (".$id.");"; //Importem els usuaris

    $result = $conexion->query($sql); //Utilitzem la conexio per a donar un resultat

    return $result;

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
    }
    function esborrarLlibres(){
    include_once ("conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }
    $sql ="DELETE FROM llibre where id = (".$this->id.");";

    $result = $conexion->query($sql);//Retotno resultat de la conexio si ha funcionat o no

    if ($result===TRUE) {//Comprobem que s'ha introduit satisfactoriament
      echo "S'ha eliminat el llibre correctament";
    }else{
      echo "Error: ".$sql." <br />".$conexion->error;
    }

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
  function modificarLlibre(){
    include_once ("conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }
    $sql ="UPDATE llibre set titol ='$this->titol', isbn ='$this->isbn', lloc_publicacio ='$this->llpubli',
    num_edicio ='$this->nedicio', any_edicio ='$this->any', id_autor ='$this->autor', editorial ='$this->editorial',
    quantitat ='$this->qexemplars' where id = (".$this->id.");";
    //Genero sentencia SQL
    /*VALUES ('$_GET['nom']', '$_GET['cognom']', '$_GET['pais']') */


    $result = $conexion->query($sql);//Retotno resultat de la conexio si ha funcionat o no

    if ($result===TRUE) {//Comprobem que s'ha introduit satisfactoriament
      echo "S'ha modificat el llibre correctament";
    }else{
      echo "Error: ".$sql." <br />".$conexion->error;
    }

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
}

 ?>
