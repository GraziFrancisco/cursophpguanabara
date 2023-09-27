<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

    require_once 'contacorrente.php';
    

    $contaCreusa = new ContaBanco();
    $contaJubileu = new ContaBanco();

    // print_r($contaCreusa);
    // print_r($contaJubileu);

    $contaJubileu->abrirConta("CC");
    $contaJubileu->setDono("Jubileu Ferreira da Silva");
    $contaJubileu->setnumConta(1111);
    $contaJubileu->depositar(300);
    $contaJubileu->fecharConta();
    $contaJubileu->pagarMensal();
    $contaJubileu->sacar(250);
    $contaJubileu->sacar(88);
    $contaJubileu->saldo();
    $contaJubileu->sacar(88);
    $contaJubileu->fecharConta();
    $contaJubileu->depositar(500);
    

    
    
    echo "<pre>";
    print_r($contaJubileu);
    echo "</pre>";



    $contaCreusa->abrirConta("CP");
    $contaCreusa->setDono("Creusa Divina dos Santos");
    $contaCreusa->setnumConta(2222);
    $contaCreusa->depositar(500);
    $contaCreusa->fecharConta();
    $contaCreusa->sacar(100);
    $contaCreusa->pagarMensal();
    $contaCreusa->sacar(850);
    $contaCreusa->sacar(530);
    $contaCreusa->saldo();
    $contaCreusa->sacar(530);
    $contaCreusa->fecharConta();
    $contaCreusa->depositar(500);

    
    echo "<pre>";
    print_r($contaCreusa);
    echo "</pre>";
    
        
    

    
















?>
</body>
</html>