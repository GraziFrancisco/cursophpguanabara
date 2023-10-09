<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10</title>
</head>
<body>
    <?php 
    
    require_once "visitante.php";
    require_once "aluno.php";
    require_once "bolsista.php";
    require_once "tecnico.php";

    //$v1 = new Visitante();
    //$v1->setNome("Grazieli");
    //$v1->setIdade(38);
    //$v1->setSexo("Feminino");

    //$a1 = new Aluno();
    //$a1->pagarMensalidade();

    //$b1 = new Bolsista();
    
    $b1->setNome("Natalie");
    $b1->setIdade(16);
    $b1->setSexo("Feminino");
    $b1->renovarBolsa();
    $b1->pagarMensalidade();



    print_r($b1);
    
    
    
    ?>
</body>
</html>