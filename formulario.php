<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
    $txt = isset($_GET["txt"])?$_GET["txt"]:"Qualquer texto <br/>";
    $tipo = isset($_GET["tipo"])?$_GET["tipo"]:" Times new roman";
    $tam = isset($_GET["tam"])?$_GET["tam"]:"10pt";
    $cor = isset($_GET["cor"])?$_GET["cor"]:"#db0000ff";

    ?>
    <title>Aula de PHP</title>

    <style>
        span.texto{
            font-family: <?php echo $tipo?>;
            font-size: <?php echo $tam?>;
            fcolor: <?php echo $cor?>;

        }
    </style>
</head>
<body>
<h1>PHP</h1>
<h2>Programação Web II</h2>
<h3>Utilizando para formatar o texto da página</h3>

    <?php 
    echo "<span class='texto'>$txt<span/>"
    ?>
    <br/>
    <a href="formulario.html">Voltar</a>
    <!--Restante do código-->
</body>
</html>