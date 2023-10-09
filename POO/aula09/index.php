<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once "pessoa.php";
        require_once "aluno.php";
        require_once "professor.php";
        require_once "funcionario.php";

        $p1= new Pessoa("Grazieli", 38, "Feminino");
        $p2= new Aluno("Nátalie", 16, "Feminino");
        $p3= new Professor("Gustavo", 45, "Masculino");
        $p4= new Funcionario("Maria", 60, "Feminino");

        $p2->setCurso("Informática");
        $p3->setSalario(4500);
        $p4->setSetor("Estoque");
        
    
    
        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);
    

        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
    
</body>
</html>