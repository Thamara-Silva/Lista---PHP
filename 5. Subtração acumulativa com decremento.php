<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $var = isset ($_GET["v"])?$_GET["v"]:3;

        echo "O valor inserido é  " . $var;
        echo "<br>";
        while ($var>0) {
        echo "</br> Valor atual: " . --$var; 
        }
        echo "</br>Fim!"
         ?>
</body>
</html>