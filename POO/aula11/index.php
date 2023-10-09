<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    
    require_once 'ave.php';
    require_once 'mamifero.php';
    require_once 'reptil.php';
    require_once 'peixe.php';

    $m = new Mamifero();
    $r = new Reptil();
    $p = new Peixe();
    $a = new Ave();

    $m->setPeso(85.3);
    $m->setIdade(2);
    $m->setMembros(4);
    $m->alimentar();


    $p->setPeso(0.35);
    $p->setIdade(1);
    $p->setMembros(0);
    $p->alimentar();




    print_r($p);













    ?>
</body>

</html>