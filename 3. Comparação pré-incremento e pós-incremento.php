<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $var = isset ($_GET["v"])?$_GET["v"]:0;

        echo "O valor inserido é  " . $var;
        echo "<br>";

        $tot = ++$var;
        echo "Pré-incremento: " . $tot; 
        
        $var = isset ($_GET["v"])?$_GET["v"]:0;
        $tot = $var++;
        echo "</br> Pós-incremento: " . $tot; 
         ?>
</body>
</html>