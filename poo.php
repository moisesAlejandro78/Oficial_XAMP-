<?php
//poo: permite estructurar el codigo en clases y objetos. este enfoque facilita la reutilizacion del codigo, 
    class Estudiante{
        public $nombre;
        public $semestre;
        public function __construct($nombre,$semestre){
            $this->nombre=$nombre;
            $this->semestre=$semestre;
        }//__constructor es metodo magico
        public function asistencia(){
            echo "Mi nombre es: $this->nombre y estoy en: $this->semestre semestre<br>";
        }
    }
    $estudiante1=new Estudiante("Pepe",3);
    $estudiante1->asistencia();
    //echo $estudiante1->$nombre="Pedro";
    //clase vehiculo marca y modelo, metodo mostrar informacion que se despliegue en pantalla
    //el nombre del vehiculo y el modelo
    class Vehiculo{
        public $marca;
        public $modelo;
        public function __construct($ma,$mod){
            $this->marca=$ma;
            $this->modelo=$mod;
        }
        public function mostrarInformacion(){
            echo "El vehiculo es:<br> Nombre: $this->marca <br> $this->modelo";
        }
    }
    $ve=new Vehiculo("toyota", "kml73343");
    $ve->mostrarInformacion();
    //metodos magicos, php tiene modelos magicos que permiten manupular
    //la manera en que los objetos se comportan
    //algunos metodos son: construct, descruct, get, set, call
    class metodoMagico{
        private $datos=[];
        private $datos1=array();
        public function __set($nombre,$valor){
            $this->datos[$nombre]=$valor;

        }
        public function __get($nombre){
            return $this->datos[$nombre];
        }
    }
    echo "<br>";
    $arreglo=new metodoMagico();
    $arreglo->nombre="Pepito0oooooo";
    echo $arreglo->nombre;
    //2 ejemplos usando 5 metodos magicos
    //niveles de acceso, definie la visibilidad de propidades y metodos de una clase
    //3 nvl principales son: 
    //public accesible globalmente, private accesible solo en la clase, protected accesbile dentro de laclase y subclases
     class infAlumno{
        protected $nombre="Moises";
        //private $ci;
        protected $contrasena;
        /* public function __construct($ci,$nombre){
            $this->ci=$ci;
            $this->nombre=$nombre;
        } */
        public function mostrarInfo(){
            echo "Nombre: $this->nombre<br>";
        }
     }
     echo "<br>";
     $alumnoo=new infAlumno();
     //$alumnoo->nombre="Juan";//asiganas
     $alumnoo->mostrarInfo();
     //echo $alumnoo->nombre;//meustras
     //3ejemplos con public, 3private, 3 protected
    //relaciones de clases: 
?>