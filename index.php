<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="texto">
            <h1>Calculadora de Determinantes 3x3</h1>
            <p>Por favor ingrese en cada casilla el valor correspondiente</p>
        </div>
        <div class="caja">
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                <input class="a11" type="number" name="a11" required placeholder="a11">
                <input class="a12" type="number" name="a12" required placeholder="a12">
                <input class="a13" type="number" name="a13" required placeholder="a13">
                <input class="a21" type="number" name="a21" required placeholder="a21">
                <input class="a22" type="number" name="a22" required placeholder="a22">
                <input class="a23" type="number" name="a23" required placeholder="a23">
                <input class="a31" type="number" name="a31" required placeholder="a31">
                <input class="a32" type="number" name="a32" required placeholder="a32">
                <input class="a33" type="number" name="a33" required placeholder="a33">

                <input type="submit" name="submit" value="Enviar" class="submit">
            </form>
        </div>

        <?php

        if(isset($_POST['submit'])){
            $a11 = $_POST['a11'];
            $a12 = $_POST['a12'];
            $a13 = $_POST['a13'];
            $a21 = $_POST['a21'];
            $a22 = $_POST['a22'];
            $a23 = $_POST['a23'];
            $a31 = $_POST['a31'];
            $a32 = $_POST['a32'];
            $a33 = $_POST['a33'];

            $resultado1 = $a11 * $a22 * $a33;
            $resultado2 = $a21 * $a32 * $a13;
            $resultado3 = $a31 * $a12 * $a23;
            $resultado4 = $a13 * $a22 * $a31;
            $resultado5 = $a23 * $a32 * $a11;
            $resultado6 = $a33 * $a12 * $a21;

            $Total = $resultado1 + $resultado2 + $resultado3 - $resultado4 - $resultado5 - $resultado6;
        }
    
        ?>

        <section class="modal">
            <div class="resultado">
                <div class="icono" align="right">
                    <i class="fa-solid fa-circle-xmark modal_close"></i>
                </div>
                <div class="contenido">
                    <h1>RESULTADO</h1>
                    <?php
                        echo "<p>El resultdo de la Determinante es $Total</p>";
                    ?>
                </div>
            </div>
        </section>

    </section>

    <script src="main.js"></script>
    <script src="https://kit.fontawesome.com/6f3964109e.js" crossorigin="anonymous"></script>
</body>
</html>