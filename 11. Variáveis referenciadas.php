<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $a = 5 ;
        $b = &$a;
        echo "A = $a e B = $b</br>";

        $a++;

        echo "</br>Valor final de A: $a";
        echo "</br>";
        echo "</br>Valor final de B: $b";
         ?>
</body>
</html>