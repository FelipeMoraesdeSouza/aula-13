<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Senac</title>
</head>

<body>
    <?php
        //faz a requisição da classe cliente para ser usada
        require('C:\xampp\htdocs\senac\aula-15\classe\Cliente.class.php');

        //criar o objeto com base na classe
        $c1 = new Cliente();
        echo $c1->setClass("Juan",12312312334,500,2500,1);
        echo $c1->saldo();

        $c1->sacar(300);
        $c1->depositar(500);

        $c1->sacar(500);
        $c1->sacar(500);

        $c1->sacar(1000);
        $c1->sacar(1000);
        $c1->sacar(200);
        $c1->sacar(100);
        //echo $c1->saldo();
        /*
        $c2 = new Cliente();
        echo $c2->setClass("Márcia",345567678,1500,6500,2);
        $c2->sacar(2000);
        echo $c2->saldo();
        */
    ?>
</body>
</html>