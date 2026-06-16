<html>
<head>
    <link rel="stylesheet" href="estilo.css">
    <title>Estruturas de decisão</title>
</head>
<body>
    <?php
   echo"<h2>Estruturas de decisão</h2>";

    $nota1 = isset ($_GET["n1"])?$_GET["n1"]:0;
    $nota2 = isset ($_GET["n2"])?$_GET["n2"]:0;
    $media = ($nota1+$nota2)/2;
     if ($nota1==$nota2) {  //Funciona como um SE - SE nota1 for igual nota2  entao (as chaves)
        $mens=" & Nota 1 é igual a Nota 2!"; //Exiba a mensagem
     }

     elseif ($nota1>$nota2){ //Funciona como um SENÃOSE - Se a nota1 não for igual a nota2,
                            // e se a nota1 for maior que a nota2 então
        $mens=" & Nota 1 é maior que a Nota 2!"; //Exiba a mensagem
     }

     else{ //Funciona como um SENÃO - Se nada das situações acima for verdadeiro então
        $mens=" & Nota 2 é maior que a Nota 1!"; //Exiba a mensagem
     }

     echo"Nota 1 = $nota1 Nota 2 = $nota2 $mens";
     echo "</br> A média entre <b>$nota1</b> e <b>$nota2</b> é " .number_format($media,1);
     $situacao = ($media>=5)?"Bom menino!":"Vai estudar";
     echo"</br>A situação do aluno é: ". $situacao;
    ?>

    <br><br>

    <button><a href="form.html">Voltar</a></button>
</body>
</html>