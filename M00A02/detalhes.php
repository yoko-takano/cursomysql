<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título da Página</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <?php 
        require_once "includes/banco.php";
        require_once "includes/funcoes.php";
    ?>
    <div id="corpo">
        <?php 
            include_once "topo.php";
            $cod = $_GET['cod'] ?? 0;
            $busca = $banco->query("select * from jogos where cod='$cod'");
        ?>
        <h1>Detalhes do Jogo</h1>
        <table class='detalhes'>
            <?php 
                if (!$busca) {
                    echo "<tr><td>Busca falhou!" . $banco->error . "</tr></td>";
                } else {
                    if ($busca->num_rows == 1) {
                        $reg = $busca->fetch_object();
                        $t = thumb($reg->capa);
                        echo "
                        <tr>
                            <td rowspan='3'><img src='$t' class='full'></img></td>
                            <td>
                                <h2>$reg->nome</h2>
                                Nota: $reg->nota/10.00
                            </td>
                        </tr>
                        <tr>
                            <td>$reg->descricao</td>
                        </tr>
                        <tr>
                            <td>Admin</td>
                        </tr>
                        ";
                    } else {
                        echo "<tr><td>Nenhum registro encontrado</td></tr>";
                    }
                }
            ?>
        </table>
        <a href="index.php"><img src="icones/icoback.png" alt="botão de voltar"></a>
    </div>
    <?php include_once "rodape.php"?>
</body>
</html>