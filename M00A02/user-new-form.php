<h1>Novo Usuário</h1>
<form action="user-new.php" method="post">
    <table>
        <tr>
            <td>Usuário: </td>
            <td><input type="text" name="usuario" id="usuario" size="10" maxlength="10"></td>
        </tr>
        <tr>
            <td>Nome: </td>
            <td><input type="text" name="nome" id="nome" size="30" maxlength="30"></td>
        </tr>
        <tr>
            <td>Tipo: </td>
            <td><select name="tipo" id="tipo">
                <option value="admin">Administrador do Sistema</option>
                <option value="editor" selected>Editor Autorizado</option>
            </select></td>
            <tr>
                <td>Senha: </td>
                <td><input type="password" name="senha1" id="senha1" size="10" maxlength="10"></td>
            </tr>
            <tr>
                <td>Confirmar senha: </td>
                <td><input type="password" name="senha2" id="senha2" size="10" maxlength="10"></td>
            </tr>
            <tr><td><input type="submit" value="Salvar"></td></tr>
        </tr>
    </table>
</form>