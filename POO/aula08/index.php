<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 08</title>
</head>
<body>

<?php 
    require_once 'pessoa.php';
    require_once 'livro.php';


    $pessoa = new Pessoa("Grazieli", 37, "Feminino");

    print_r($pessoa);

    $livro = new Livro("A rainha de copas", "Chico Xavier", 359, 1, $pessoa);

    print_r($livro);

    $pessoa->fazerAniver();

    print_r($pessoa);
    $livro->detalhes();
    $livro->abrir();
    $livro->detalhes();
    $livro->abrir();
    $livro->fechar();
    $livro->detalhes();
    $livro->folhear();
    $livro->abrir();
    $livro->folhear();
    $livro->avancarPag();
    $livro->avancarPag();
    $livro->voltarPag();









?>




    
</body>
</html>