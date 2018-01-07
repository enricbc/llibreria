<?php
class prestec
{
  private $llibres_associats;
  private $id_usuari;
  private $data_sortida;
  private $dat_max_devolucio;
  private $data_real_devolucio;
  private $id;

  function __construct()
  {
    $args = func_get_args();
    $num = func_num_args();
    $f='__construct'. $num;
    /*Important que ens fixesim en el n� de parametres que passem
    per a donarli de nom al contructor __construct + el n� de parametres*/
    if (method_exists($this,$f)) {
      call_user_func_array(array($this,$f),$args);
    }
  }
  function __construct5($llibres_associats,$id_usuari,$data_sortida,$dat_max_devolucio,$data_real_devolucio)
  {
    $this->llibres_associats=$llibres_associats;
    $this->id_usuari=$id_usuari;
    $this->data_sortida=$data_sortida;
	$this->dat_max_devolucio=$dat_max_devolucio;
    $this->data_real_devolucio=$data_real_devolucio;
  }
  function __construct1($id)
  {
    $this->id=$id;
  }
  function __construct4($id,$llibres_associats,$id_usuari,$data_sortida)
  {
    $this->id=$id;
    $this->llibres_associats=$llibres_associats;
    $this->id_usuari=$id_usuari;
    $this->data_sortida=$data_sortida;
  }
  function inserirPrestec(){
    include ("../php/conexio.php");

    @$conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexi� sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    $sql ="INSERT INTO prestec (llibres_associats, id_usuari, data_sortida, dat_max_devolucio, data_real_devolucio)
    VALUES ('$this->llibres_associats', '$this->id_usuari', '$this->data_sortida', '$this->dat_max_devolucio', '$this->data_real_devolucio')";//Genero sentencia SQL

    $result = $conexion->query($sql);//Retotno resultat de la conexio si ha funcionat o no

    if ($result===TRUE) {//Comprobem que s'ha introduit satisfactoriament
      echo "S'ha inserit el prestec correctament";
    }else{
      echo "Error: ".$sql." <br />".$conexion->error;
    }
    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
  static public function getPrestec(){
    include ("../php/conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexi� sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    $sql="SELECT * from prestec"; //Importem els usuaris

    $result = $conexion->query($sql); //Utilitzem la conexio per a donar un resultat

    return $result;

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }

  static public function getPrestec2(){
    include ("../php/conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexi� sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    $sql="SELECT e.id, e.id_llibre, e.estat from exemplar e, llibre l where estat=0 ON e.id_llibre = l.titol"; //Importem els usuaris

    $result = $conexion->query($sql); //Utilitzem la conexio per a donar un resultat

    return $result;

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }

  static public function getPrestecs($id){ //Recullo la informacio d'un autor gracies a un id
    include ("../php/conexio.php");
    $conexion = new mysqli();

    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexi� sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    $sql="SELECT * from prestec where id = (".$id.");"; //Importem els usuaris

    $result = $conexion->query($sql); //Utilitzem la conexio per a donar un resultat

    return $result;

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
  function esborrarPrestec(){
    include("conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexi� sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }
    $sql ="DELETE FROM prestec where id = (".$this->id.");";

    $result = $conexion->query($sql);//Retotno resultat de la conexio si ha funcionat o no

    if ($result===TRUE) {//Comprobem que s'ha introduit satisfactoriament
      echo "S'ha eliminat el prestec correctament";
    }else{
      echo "Error: ".$sql." <br />".$conexion->error;
    }

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
  function modificarPrestec(){
    include("conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexi� sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }
    $sql ="UPDATE prestec set llibres_associats ='$this->llibres_associats', id_usuari ='$this->id_usuari', data_sortida ='$this->data_sortida', dat_max_devolucio ='$this->dat_max_devolucio', data_real_devolucio ='$this->data_real_devolucio' where id = (".$this->id.");";
    //Genero sentencia SQL
    //VALUES ('$this->llibres_associats', '$this->id_usuari', '$this->data_sortida', '$this->dat_max_devolucio', '$this->data_real_devolucio'/


    $result = $conexion->query($sql);//Retotno resultat de la conexio si ha funcionat o no

    if ($result===TRUE) {//Comprobem que s'ha introduit satisfactoriament
      echo "S'ha modificat el prestec correctament";
    }else{
      echo "Error: ".$sql." <br />".$conexion->error;
    }

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
}

?>
