<?php 
    $q = "select usuario, nome, senha, tipo from usuarios where usuario='" . $_SESSION['user'] . "'";
    $busca = $banco->query($q);
    $reg = $busca->fetch_object();
?>


<h1> Alteração de dados </h1>
<form action="user-edit.php" method="post">
    <table>
        <tr>
            <td>Usuário</td>
            <td><input type="text" name="usuario" id="usuario" maxlength="10" size="10" value="<?php echo $reg->usuario?>" readonly></td>
        </tr>
        <tr>
            <td>Nome</td>
            <td><input type="text" name="nome" id="nome" maxlength="30" size="30" value="<?php echo $reg->nome?>"></td>
        </tr>
        <tr>
            <td>Tipo</td>
            <td><input type="text" name="tipo" id="tipo" readonly value="<?php echo $reg->tipo?>"></td>
        </tr>
        <tr>
            <td>Senha</td>
            <td><input type="password" name="senha1" id="senha1" maxlength="10" size="10"></td>
        </tr>
        <tr>
            <td>Confirme a senha</td>
            <td><input type="password" name="senha2" id="senha2" maxlength="10" size="10"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Salvar"></td>
        </tr>
    </table>
</form>