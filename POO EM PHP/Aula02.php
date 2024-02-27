<!DOCTYPE html>
<!-- Teste referente à Aula 02 do curso do Curso em Vídeo POO em PHP -->
<html>
<head>
    <title>Aula 02</title>
</head>
<body>
    <?php
        require_once('Caneta.php');
        $c1 = new Caneta;
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampada = false;
    
         // c1->rabiscar (para chamar o metood rabiscar presente no arquivo Caneta.php)
         // print_r(($c1)) -> Mostrar o Estado do Objeto
    
    
    
    
    ?>
    
</body>
</html>
