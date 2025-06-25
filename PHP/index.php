<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando</title>
</head>
<body>
        <h1> Exemplo PHP <h1>
<?php 

echo "Ola Mundo \u{1F30E}"; //Pode ser usar Print tb
//phpinfo() e uma função que diz informações do servidor
$nome = "Luiz Roberto";
echo "<p>Ola eu sou $nome</p>";
echo "Hoje e dia " . date("d/m/Y") . "<br>";
echo "e a hora atual e " . date("H:i:s") . "<br>";

?>


</body>
</html>