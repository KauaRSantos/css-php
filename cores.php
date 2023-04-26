<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <?php
    $texto = $_GET["texto"];
    $tamanho = $_GET["tamanho"];
    $cor = $_GET["cor"];
    $corfundo = $_GET["corfundo"];
    $fonte = $_GET["fonte"];
    ?>

<style>
    body{
        background-color: <?php echo $corfundo; ?>;
    }

    span.texto{
        font-size: <?php echo $tamanho; ?>;
        color: <?php echo $cor; ?>;
        font-family:<?php echo $fonte; ?>;
        
    }

</style>
</head>

<body>
   <?php
   echo "<span class='texto'> $texto </span>";
   ?>
</body>

</html>