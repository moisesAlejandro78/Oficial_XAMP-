<?php
     class Usuario{
        private $dato=[];
        public function __set($prop,$valor){
            $this->dato[$prop]=$valor;
        }
        public function __get($propiedad)
        {
            if (isset($this->dato[$propiedad])) {
                return $this->dato[$propiedad];
            }
            else{
                return "No existe la propiedad...";
            }
        }
        public function __toString()
        {
            return "Ahora es un string el objeto";
        }
        public function __call($name, $arguments)
        {
            return "El metodo $name() que intentas llamar no existe";
        }
        public function __unset($name)
        {
            unset($this->dato[$name]);
        }
        public function mostrarDatos($prop){
            echo "El usuario tiene los datos ".($this->dato[$prop])."<br>";
        }
     }
     echo "Primer ejercicio *************************************";
    $users=new Usuario();
    $users->edad=24;
    $users->nombre="Pruebaaaaa<br>";
    echo $users->nombre."<br>";
    echo $users->edad."<br>";
    unset($users->nombre);
    $users->mostrarDatos("edad");
    echo $users->saludo();
    class Producto{
        private $nombre;
        private $precio;
        public function __construct($name,$pre)
        {
            $this-> nombre=$name;
            $this->precio=$pre;
        }
        public function __toString()
        {
            return "Producto: {$this->nombre} - Precio: {$this->precio} <br>";
        }
        public function __call($name, $arguments)
        {
            return "la funcion $name() no existe ...<br>";
        }
        public function __clone()
        {
            $this->nombre.= " objeto clonado con exito<br>";
        }
        public function __isset($name)
        {
            return isset($this->$name);
        }
    }
     echo "Primer ejercicio *************************************";
    $p1=new Producto("Chinchinajo",0.2222);
    $p2=new Producto("Loco addam",34);
    echo "<br>";
    echo $p1;
    echo $p2->PrecioTotal();
    $p3=clone $p2;
    echo $p3." clonado<br>";
    class Padre{
        public $nombreP;
        private $ci;
        protected $complexion;
        public function __construct()
        {
            $this->nombreP="Paul";
            $this->ci="cpf2352435@est.univalle.edu";
            $this->complexion="fat";
        }
        public function saludo(){
            echo "Hola mi nombre es: $this->nombreP y soy el Papa<br>";
        }
        public function hereda(){
            echo "Estoy heredando mi complexion $this->complexion ...<br>";
        }
    }
    class Madre extends Padre{
        public $nombreM="Patricia";
        protected $iq=50;
        private $ci="quinajo34235@est.univalle.edu";
        public function saludar(){
            parent::saludo();
            echo "Hola soy la mama: $this->nombreM <br>";
        }
        public function hereda()
        {
            parent::hereda();
            echo "Estoy heredando el iq de $this->iq de mi mama...<br>";
        }
    }
    class Hijo extends Madre{
        public $nombre="Waiwa";
        public function saludoHijo(){
            echo "Holaaa y soy el hijo $this->nombre<br>";
            parent:: saludar();
        }
        public function heredado(){
            parent:: hereda();
            echo "hola soy $this->nombre y herede estas caracteristicas de mis padres";
        }
    }
    echo "Ultimo ejercicio**************************************";
    $waiwa=new Hijo();
    $waiwa->saludoHijo();
    $waiwa->heredado();
?>