<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>

<body>
    <h2>Los primeros 20 numeros enteros</h2>
    <?php
    //sin parametro
    imprimirNPares();
    function imprimirNPares()
    {
        $contador = 0;
        $index = 2;
        while ($contador <= 19) {
            echo $index . "<br>";
            $index = $index + 2;
            $contador++;
        }
        echo $contador . " es mi contador...";
    } //los 20 num enteros
    ?>
    <h2>Mostrar la X tabla de multiplicar</h2>
    <?php
    tablaMultiplicar();
    function tablaMultiplicar()
    {
        $tablaMult = 9;
        for ($i = 1; $i <= 10; $i++) {
            # code...
            $resultado = $tablaMult * $i;
            echo $tablaMult . " x " . $i . "=" . $resultado . "<br>";
        }
    }
    ?>
    <h2>Crear una funcion que genere 10 num aleatorios y diga cuantos son mayores a 50</h2>
    <?php
    numMayores();
    function numMayores()
    {
        $arrayNum = [];
        $contadorMayor = 0;
        $contadorMenor = 0;
        for ($i = 0; $i < 10; $i++) {
            # code...
            $arrayNum[$i] = rand(1, 100);
            if ($arrayNum[$i] > 50) {
                # code...
                echo "Son mayores a 50" . "<br>";
                echo $arrayNum[$i] . "<br>";
                $contadorMayor++;
            } else {
                echo "Son menores a 50" . "<br>";
                echo $arrayNum[$i] . "<br>";
                $contadorMenor++;
            }
        }
        echo "hay $contadorMayor numeros mayores y $contadorMenor numeros menores";
    }
    ?>
    <h2>Mostrar los 50 num primos</h2>
    <?php
    imprimir();
    function imprimir()
    {
        echo "Ejercicio trata de esto: si es multiplo de 3 fizz y si es multiplo de 5 buzz y si es ambos fizzbuzz";
        echo "<br>";
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                # code...
                echo $i . " FizzBuzz<br>";
            } else if ($i % 3 == 0) {
                # code...
                echo $i . " Fizz<br>";
            } else if ($i % 5 == 0) {
                # code...
                echo $i . " Buzz<br>";
            } else {
                echo $i . "<br>";
            }
        }
    }
    ?>
    <h2>Crear una función que calcule y muestre si los números del 1 al 50 son primos</h2>
    <?php
    primosN();
    function primosN()
    {
        echo "1<br>";
        for ($i = 2; $i <= 50; $i++) { //i=2
            $contador = 0;
            for ($j = $i; 1 <= $j; $j--) { //j=2-- 1
                # code...
                if ($i % $j == 0) {
                    # code...
                    $contador++;
                }
            }
            if ($contador == 2) {
                # code...
                echo $i . " Es Primo<br>";
            } else {
                echo $i . "<br>";
            }
        } //12345...
    }
    ?>
    <form method="post">
        <label for="">Conjetura de Collatz: Generar una secuencia hasta que llegue a 1.</label><br>
        <input type="number" name="c" placeholder="introduzca un numero entero" >
        <button>enviar</button>
    </form>
    <?php
        if (isset($_POST["c"])) {
            $numCollatz=(int)$_POST["c"];
            conjeturaCollatz($numCollatz);
        }
        function conjeturaCollatz($numCollatz){
            echo $numCollatz."<br>";
            if (is_int($numCollatz)&&$numCollatz>0) {
                while (true) {
                    if ($numCollatz%2==0) {
                        # code...
                        $numCollatz=$numCollatz/2;
                        echo $numCollatz."<br>";
                        
                    }
                    else{
                        $numCollatz=($numCollatz*3)+1;
                        echo $numCollatz."<br>";
                    }
                    if($numCollatz==1){
                        break;
                    }
                }
            }
        }
    ?>
    <form method="post">
        <label for="">Verificación del número de Armstrong</label><br>
        <input type="number" name="Amstrong" placeholder="introduzca un numero entero" >
        <button>enviar</button>
    </form>
    <?php
    if (isset($_POST["Amstrong"])) {
        # code...
        $nAmstrong=(int)$_POST["Amstrong"];
        verificarNumAmstrong($nAmstrong);
    }
    function verificarNumAmstrong($nAmstrong){
        if ($nAmstrong>=100&&$nAmstrong<1000) {
            # code...
            $unidades=0;
            $exponente=0;
            $copia=$nAmstrong;
            while ($nAmstrong>0) {
                $unidades=$nAmstrong%10;
                //echo $unidades." unidades<br>";
                $nAmstrong=$nAmstrong/10;
                //echo $nAmstrong." anstrong<br>";
                $exponente+=($unidades**3);
                //echo $exponente." exponenete<br>";
            }
            if ($copia==$exponente) {
                # code...
                echo $exponente. " El numero es un anstrong";
            }
            else{
                Echo $exponente." no es un amstrong";
            }
        }
        else{
            echo "ingrese un numero de 3 digitos";
        }
    }
    ?>
    <h2> Imprimir un patrón numérico de triángulo rectángulo</h2>
    <?php
        $altura=8;
        mostrarTrianguloRectangulo($altura);
        function mostrarTrianguloRectangulo($altura){
            $valorNum=1;
            for ($i=0; $i < $altura; $i++) { 
                # code...
                echo "<br>";
                for ($j=1; $j <=$valorNum ; $j++) { 
                    # code...
                    echo $j;
                }
                $valorNum++;
            }
        }
    ?>
    <h2>Imprimir un patron decreciente</h2>
    <?php
        $altura=8;
        trianguloDecreciente($altura);
        function trianguloDecreciente($altura){
            $reduccion=$altura;
            for ($i=0; $i <$altura ; $i++) { 
                # code...
                echo "<br>";
                for ($j=$reduccion; $j>0; $j--) { 
                    # code...
                    echo $j;
                }
                $reduccion--;
            }
        }
    ?>
</body>
</html>