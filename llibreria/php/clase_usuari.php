
<?php

class usuari{

	//private $id;
	private $id;
	private $nom;
	private $dni;
	private $adreca;
	private $poblacio;
	private $provincia;
	private $nacio_pais;
	private $data_naixement;
	private $email;
	private $telefon;
	private $cognom;
	//private $id_prestec;









    //Introduim el GET

    public function getid() {
     return $this->id;
   }

    public function getnom() {
     return $this->nom;
   }

    public function getdni() {
     return $this->dni;
   }
    public function getadreca() {
     return $this->adreca;
   }
    public function getpoblacio() {
     return $this->poblacio;
   }
    public function getprovincia() {
     return $this->provincia;
   }

    public function getnacio_pais() {
     return $this->nacio_pais;
   }

    public function getdata_naixement() {
     return $this->data_naixement;
   }

    public function getemail() {
     return $this->email;
   }

    public function gettelefon() {
     return $this->telefon;
   }

    public function getcognom() {
     return $this->cognom;
   }

     /*public function getid_prestec() {
     return $this->id_prestec;
   }*/









    //Introduim el SET
    public function setid($id) {
     if ($id != $id->getid())
       $this->id = $id;
   }

    public function setnom($nom) {
     if ($nom != $this->getnom())
       $this->nom = $nom;
   }

    public function setcognom($cognom) {
     if ($cognom != $this->getcognom())
       $this->cognom = $cognom;
   }

    public function setdni($dni) {
     if ($dni != $this->getdni())
       $this->dni = $dni;
   }

    public function setadresa($adresa) {
     if ($adresa != $this->getadresa())
       $this->adresa = $adresa;
   }

    public function setpoblacio($poblacio) {
     if ($poblacio != $this->getpoblacio())
       $this->poblacio = $poblacio;
   }

    public function setprovincia($provincia) {
     if ($provincia != $this->getprovincia())
       $this->provincia = $provincia;
   }

    public function setnacionalitat($pais) {
     if ($pais != $this->getpais())
       $this->pais = $pais;
   }

    public function setemail($email) {
     if ($email != $this->getemail())
       $this->email = $email;
   }

    public function settelefon($telefon) {
     if ($telefon != $this->gettelefon())
       $this->telefon = $telefon;
   }

    public function setnaixement($naixement) {
     if ($naixement != $this->getnaixement())
       $this->naixement = $naixement;
   }

   /*public function setid_prestec($id_prestec) {
   if ($id_prestec != $this->getnaixement())
       $this->id_prestec = $id_prestec;
   }*/

    //ALGO QUE PULULA PER AHÍ ¿?
  public function __construct()
  {
    $args = func_get_args();
    $num = func_num_args();
    $f='__construct'. $num;
    /*Important que ens fixesim en el nº de parametres que passem
    per a donarli de nom al contructor __construct + el nº de parametres*/
    if (method_exists($this, $f)) {
      call_user_func_array(array($this, $f), $args);
    }
  }

    //me quedat aqui

    public function __construct1($id){
		$this->id = $id;

	}


    //Definim un CONSTRUCTOR
   public function __construct10($nom, $dni, $adreca, $poblacio, $provincia, $nacio_pais, $data_naixement ,$email, $telefon, $cognom) {

     //$this->id = $id;
     $this->nom = $nom;
     $this->dni = $dni;
     $this->adreca  = $adreca;
     $this->poblacio  = $poblacio;
     $this->provincia  = $provincia;
     $this->nacio_pais  = $nacio_pais;
     $this->data_naixement  = $data_naixement;
     $this->email  = $email;
     $this->telefon  = $telefon;
     $this->cognom  = $cognom;
     //$this->id_prestec = $id_prestec;

     /*$this->nom=$nom;
     $this->dni=$dni;
     $this->adreca=$adreca;
     $this->poblacio=$poblacio;
     $this->provincia=$provincia;
     $this->nacio_pais= $nacio_pais;
     $this->data_naixement=$data_naixement;
     $this->email=$email;
     $this->telefon=$telefon;
     $this->cognom=$cognom;*/
     //$this->id_prestec = $id_prestec;-->

   }


   public function __construct11($id, $nom, $dni, $adreca, $poblacio, $provincia, $nacio_pais, $data_naixement ,$email, $telefon, $cognom) {

     $this->id = $id;
     $this->nom = $nom;
     $this->dni = $dni;
     $this->adreca  = $adreca;
     $this->poblacio  = $poblacio;
     $this->provincia  = $provincia;
     $this->nacio_pais  = $nacio_pais;
     $this->data_naixement  = $data_naixement;
     $this->email  = $email;
     $this->telefon  = $telefon;
     $this->cognom  = $cognom;

	}



    //INSERIR USUARI
      function inserirUsuari(){
    include_once ("conexio.php");
    //include_once ("../M7_2/conexio.php");
    @$conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    $sql ="INSERT INTO usuari (nom, dni, adreca, poblacio, provincia, nacio_pais, data_naixement, email, telefon, cognom) VALUES ('$this->nom', '$this->dni', '$this->adreca', '$this->poblacio', '$this->provincia', '$this->nacio_pais', '$this->data_naixement',  '$this->email', '$this->telefon', '$this->cognom')";
//,id_prestec  ,'$this->$id_prestec'

    $result = $conexion->query($sql);//resultat de la conexio funciona o no?

    if ($result===TRUE) {//Comprobem que s'ha introduit
      echo "S'ha inserit l'usuari correctament";
    }else{
      echo "Error: ".$sql." <br />".$conexion->error;
    }
    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }


    //agafem les dades dels usuaris
     static public function getUsuari(){
    include_once ("conexio.php");
    //include_once ("../M7_2/conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    $sql="SELECT * from usuari"; //Importem els usuaris

    $result = $conexion->query($sql); //Utilitzem la conexio per a donar un resultat

    return $result;

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }

     //agafem la informacio d'usuari
     //s'utilitza per fer un select
	static public function getUsuaris($id){ //Recullo la informacio d'un usuari gracies a un id
    //include_once ("../M7_2/conexio.php");
    include_once ("conexio.php");
    $conexion = new mysqli();

    $server="localhost";
    $username="root";
    $password="";
    $database="llibreria";

    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobació de possible conexió sino mostra error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    $sql="SELECT * from usuari where id = (".$id.")"; //Importem els usuaris

    $result = $conexion->query($sql); //Utilitzem la conexio per a donar un resultat

    return $result;

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }


    //Fem un delete
      function esborrarUsuari(){
    include_once ("conexio.php");
    //include_once ("../M7_2/conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }
    var_dump($this->id);
    $sql ="DELETE FROM usuari where id = (".$this->id.")";

    //si substitueixo les cometes dobles per les simples, fa algo, em diu que s'ha eliminat correctament, pero no ho fa.
    //de l'altra manera, em deia tot el rato un error detras de laltre (tal com esta ara, dona error de sentencia sql)
   //NOOOO $sql = "DELETE FROM usuari where id = (".$this->id.")";
    $result = $conexion->query($sql);//Retotno resultat de la conexio si ha funcionat o no

    if ($result===TRUE) {//Comprobem que s'ha introduit satisfactoriament
      echo "S'ha eliminat l'usuari correctament";
    }else{
      echo "Error: ".$sql." <br />".$conexion->error;
    }

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }


     //PRIORITAT
    //Actualitzem les dades dels usuaris
    function modificarUsuari(){
    include_once ("conexio.php");
    //include_once ("../M7_2/conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }
     var_dump($this->id);
    $sql ="UPDATE usuari set nom ='$this->nom', dni ='$this->dni', adreca ='$this->adreca', poblacio='$this->poblacio', provincia ='$this->provincia', nacio_pais='$this->nacio_pais', data_naixement='$this->data_naixement', email ='$this->email', telefon='$this->telefon',  cognom ='$this->cognom' where id = '$this->id'";
    /*$sql= "UPDATE 'usuari' SET nom='$this->nom',dni='$this->dni',`adreca`='$this->adreca',`poblacio`='$this->poblacio',`provincia`='$this->provincia',`nacio_pais`='$this->nacio_pais',`data_naixement`='$this->data_naixement',`email`='$this->email',`telefon`='$this->telefon',`cognom`='$this->cognom' WHERE 'id = $this->id";
`id`='$this->id',
$row[0] where id = (".$this->id.")";*/
    $result = $conexion->query($sql);//Retotno resultat de la conexio si ha funcionat o no

    if ($result===TRUE) {//Comprobem que s'ha introduit satisfactoriament
      echo "S'ha modificat l'usuari correctament";
    }else{
      echo "Error: ".$sql." <br />".$conexion->error;
    }

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }












    //lo propi intent de insert
    /*
    //Abans posaba insert (a secas)
    public function inserirUsuari(){

    	include_once("conexio.php");


        //$db = new Conexio();

        //@$conexio=mysqli_connect($server, $username, $password, $database);

        $db=mysqli_connect($server, $username, $password, $database);

        if (!$db){
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }


        $sql = "INSERT INTO 'usuari' (id, nom, cognom, dni, adresa, poblacio, provincia, pais, email, telefon, naixement) VALUES ('$this->$id','$this->$nom', '$this->$cognom', '$this->$dni', '$this->$adresa', '$this->$poblacio', '$this->$provincia', '$this->$pais', '$this->$email', '$this->$telefon', '$this->$naixement')";

        $db->query($sql) ? echo 'inserit correctament' : echo 'hi ha hagut un error en la transacció';

        //$inserir="INSERT INTO usuari (nom, cognom, dni, adresa, poblacio, provincia, pais, email, telefon, naixement) VALUES ('$nom', '$cognom', '$dni', '$adresa', '$poblacio', '$provincia', '$pais', '$email', '$telefon', '$naixement')";

		//$conectar = mysqli_query($conexio, $inserir);

		//$db = mysqli_close($Conexio);
		$conexio->close($sql);



    }*/


}






?>
