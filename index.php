<?php
$random = mt_rand(1, 3);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>

<body>
    <h2>Jugaremos al piedra, papel, tijera.</</h2>
    <p>Elija una opcion: </p>
    <p>1. Piedra</p>
    <p>2. Papel</p>
    <p>3. Tijera</p>
    <form method="post">
        <label>Introduzca el numero: </label>
        <input type="number" placeholder="Ejemplo 1." required name="num">
        <button type="submit">Enviar</button>
    </form>
    <?php
    $piedra = "Piedra";
    $papel = "Papel";
    $tijera = "Tijera";
    if (isset($_POST["num"])) {
        if ($_POST["num"] == 1) {
            # code...
            echo "Elejiste " . $piedra . "<br>";
        } else if ($_POST["num"] == 2) {
            # code...
            echo "Elejiste " . $papel . "<br>";
        } else {
            echo "Elejiste " . $tijera . "<br>";
        }
        echo "COMPUTADORA ELIJIO: " . $random;
        if ($random == 1) {
            # code...
            if ($random == 1 && $_POST["num"] == 1) {
                # code...
                echo "<h3>EMPATE</h3>";
            } else if ($random == 1 && $_POST["num"] == 2) {
                # code...
                echo "<h3>La computadora elijio  $piedra y el usuario $papel es USARIO GANA</h3>";
            } else if ($random == 1 && $_POST["num"] == 3) {
                # code...
                echo "<h3>La computadora elijio  $piedra y el usuario $tijera es COMPUTADORA GANA</h3>";
            }
        } else if ($random == 2) {
            if ($random == 2 && $_POST["num"] == 2) {
                # code...
                echo "<h3>EMPATE</h3>";
            } else if ($random == 2 && $_POST["num"] == 1) {
                # code...
                echo "<h3>La computadora elijio  $papel y el usuario $piedra es COMPUTADORA GANA</h3>";
            } else if ($random == 2 && $_POST["num"] == 3) {
                # code...
                echo "<h3>La computadora elijio  $papel y el usuario $tijera es USUARIO GANA</h3>";
            }
        } else if ($random == 3) {
            if ($random == 3 && $_POST["num"] == 3) {
                # code...
                echo "<h3>EMPATE</h3>";
            } else if ($random == 3 && $_POST["num"] == 1) {
                # code...
                echo "<h3>La computadora elijio  $tijera y el usuario $piedra es USUARIO GANA</h3>";
            } else if ($random == 3 && $_POST["num"] == 3) {
                # code...
                echo "<h3>La computadora elijio  $tijera y el usuario $papel es COMPUTADORA GANA</h3>";
            }
        }
    }
    ?>
    <br>
    <h2>para saber si es mayor o menor de edad</h2>
    <form method="post">
        <label> Introduzca su edad: </label>
        <input type="number" name="edad" placeholder="Ejemplo 21" required>
        <button type="submit">Enviar</button>
    </form>
    <?php
    if (isset($_POST["edad"])) {
        if ($_POST["edad"] < 18) {
            # code...
            echo "<h2>El usuario es Menor de edad</h2>";
        } else if ($_POST["edad"] >= 18) {
            # code...
            echo "<h2>El usuario es Mayor de edad</h2>";
        }
    }
    ?>
    <br>
    <h2>Para saber si la contrasena es correcta o no </h2>
    <form method="post">
        <label>Introduzca su contrasena</label>
        <input type="text" placeholder="ejem: 123" name="contra" required>
        <button type="submit">Enviar</button>
    </form>
    <?php
    $contraServidor = "1234";
    if (isset($_POST["contra"])) {
        # code...
        if ($_POST["contra"] == $contraServidor) {
            # code...
            echo "USTED SE HA LOGUEADO.";
        } else {
            echo "Contrasena incorrecta";
        }
    }
    ?>
    <h2>Suma, resta, multiplicacion y division</h2>
    <form method="post">
        <label>Introduzca el primer numero</label>
        <input type="number" required name="num1">
        <br>
        <label>introduzca el segundo numero</label>
        <input type="number" required name="num2">
        <button type="submit">enviar</button>
    </form>
    <?php
    if (isset($_POST["num1"]) && isset($_POST["num2"])) {
        # code...
        echo $suma = $_POST["num1"] + $_POST["num2"] . "<br>";
        echo $rest = $_POST["num1"] - $_POST["num2"] . "<br>";
        echo $mult = $_POST["num1"] * $_POST["num2"] . "<br>";
        echo $div = $_POST["num1"] / $_POST["num2"] . "<br>";
    }
    ?>
    <h2>si es par o impar</h2>
    <form method="post">
        <label>introduzca un numero</label>
        <input type="number" name="num1" required>
        <button>Enviar</button>
    </form>
    <?php
    if (isset($_POST["num1"])) {
        # code...
        if ($_POST["num1"] > 0) {
            # code...
            if ($_POST["num1"] % 2 == 0) {
                # code...
                echo "El " . $_POST["num1"] . " es Par";
            } 
            else {
                echo "El " . $_POST["num1"] . " es Impar";
            }
        }
        else{
            echo "Introduzca un valor entero";
        }
    }
    ?>
    <h2>Preguntar al usuario su edad e ingresos</h2>
    <form method="post">
        <label>introduzca edad</label>
        <input type="number" name="edad" required><br>
        <label>introduzca sus ingresos</label>
        <input type="number" name="ingresos" required>
        <button>Enviar</button>
    </form>
    <?php
    if (isset($_POST["edad"]) && isset($_POST["ingresos"])) {
        # code...
        if ($_POST["edad"] >= 18 && $_POST["ingresos"] >= 1000) {
            # code...
            echo "Puedes tributar";
        } else {
            echo "No puedes tributar";
        }
    }
    ?>
    <h2>Mayor menor</h2>
    <form method="post">
        <label>introduzca valor 1</label>
        <input type="number" name="valor1" required><br>
        <label>introduzca valor 2</label>
        <input type="number" name="valor2" required>
        <button>Enviar</button>
    </form>
    <?php
    if (isset($_POST["valor1"]) && isset($_POST["valor2"])) {
        # code...
        if ($_POST["valor1"]>$_POST["valor2"]) {
            # code...
            echo "el ".$_POST["valor1"]." es mayor";
        }
        else if($_POST["valor1"]<$_POST["valor2"]){
            echo "el ".$_POST["valor2"]." es mayor";
        }
        else if ($_POST["valor1"]==$_POST["valor2"]) {
            # code...
            echo "Ambos valores son iguales";
        }
    }
    ?>
</body>

</html>