<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 01</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php 
        # verificando se o número foi enviado
        if (isset($_GET["numero"])) {
        # verifica se o número foi enviado (isset -> função que verifica se a variável não null, retorna true se a variável tem valor diferente de null, false se não existe valor )
            $numero = (int) $_GET["numero"];
            # converte o valor recebido para inteiro 
            $antecessor = $numero -1; 
            $sucessor = $numero + 1;

            echo "Número digitado: <strong>$numero</strong><br>";
            echo "Antecessor: $antecessor<br>";
            echo "Sucessor: $sucessor<br>";
        }else{
            echo "Nenhum número foi informado.";
            
        }
    ?>
    <p><a href="javascript:history.go(-1)"><strong>Voltar a página anterior</strong> </a></p>
</body>
</html>