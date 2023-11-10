<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título da Página</title>
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <?php 
        require_once "includes/login.php";
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
                        echo "<tr><td rowspan='3'><img src='$t' class='full'></img></td>";
                        echo "<td><h2>$reg->nome</h2>";
                        echo "Nota: $reg->nota/10.00";
                        if (is_admin()) {
                            echo " <span class='material-symbols-outlined'>add_circle</span>";
                            echo " <span class='material-symbols-outlined'>edit</span>";
                            echo " <span class='material-symbols-outlined'>delete</span>";
                        } elseif (is_editor()) {
                            echo " <span class='material-symbols-outlined'>edit</span>";
                        }
                        echo "<tr><td><p>$reg->descricao</p>";
                    } else {
                        echo "<p>Jogo não encontrado</p>";
                    }
                }
            ?>
        </table>
        <?php echo voltar() ?>
    </div>
    <?php include_once "rodape.php"?>
</body>
</html>