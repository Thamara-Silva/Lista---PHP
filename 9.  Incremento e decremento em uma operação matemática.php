<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $a = isset ($_GET["x"])?$_GET["x"]:5;
        $b = isset ($_GET["y"])?$_GET["y"]:2;
        echo "<br> x = $a e y = $b";
        echo "</br> x . y = " . $a++ * $b--; 
        echo "</br> x . y = " . $a++ * $b--; 
         ?>
</body>
</html>