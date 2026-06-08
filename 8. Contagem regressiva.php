<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $i = isset ($_GET["v"])?$_GET["v"]:11;
        echo "Contando... ";
        echo "<br>";
        while ($i>0) {
        echo "</br>" . --$i; 
        }
        echo "</br>Fim!"
         ?>
</body>
</html>