<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>AntonioPedro</title>
</head>
<body>
    <h1>AntonioPedro</h1>
    <ul>
    <?php
    // Diretório atual (onde o PHP está rodando)
    $diretorio = "./"; // Ajuste o caminho se necessário, ex: "../meu_repositorio/"
    
    // Escaneia todos os arquivos do diretório
    $arquivos = scandir($diretorio);
    
    // Filtra e exibe apenas arquivos .txt
    foreach ($arquivos as $arquivo) {
        if (pathinfo($arquivo, PATHINFO_EXTENSION) == "txt") {
            echo "<li><a href='$arquivo' target='_blank'>$arquivo</a></li>";
        }
    }
    ?>
    </ul>
</body>
</html>
