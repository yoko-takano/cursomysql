<h1>Login</h1>
<form action="user-login.php" method="post">
    <table>
        <tr>
            <td>Usuário: </td>
            <td><input type="text" name="usuario" id="usuario" size="10" maxlength="10" required></td>
        </tr>
        <tr>            
            <td>Senha: </td>
            <td><input type="password" name="senha" id="senha" size="8" maxlength="8" required></td>
        </tr>   
        <tr>
            <td><input type="submit" value="Entrar"></td>
        </tr>
    </table>
</form>

<?php 
    // Lembrar que o tamanho do nome do usuário no input deve convesar com o que foi definido na base de dados
    // Tamanho da senha no banco de dados é 60 porque a hash tem 60 caracteres

?>