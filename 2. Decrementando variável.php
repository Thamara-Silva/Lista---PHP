<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $var = isset ($_GET["v"])?$_GET["v"]:0;
        echo "O valor inserido é  " . $var;
        echo "<br>";
        $tot = $var-1;
        echo "$var - 1 é igual a: " . $tot; 
         ?>
</body>
</html>