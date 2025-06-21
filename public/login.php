<?php
defined('CONTROL') or die('Acesso negado!');

//verifica se o formulario foi enviado
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    //verifica se o usuario e senha foram preenchidos
    $usuario = $_POST['usuario'] ?? null;
    $senha = $_POST['senha'] ?? null;
    $erro = null;

    if(empty($usuario) || empty($senha)) {
        $erro = 'Usuário e senha são obrigatórios.';
    }

    //verifica se o usuario e senha estão corretos
    if(empty($erro)) {

        $usuarios = require_once __DIR__ . '/../inc/usuarios.php';

        foreach ($usuarios as $user) {
            if($user['usuario'] === $usuario && password_verify($senha, $user['senha'])){
                //efetua o login
                $_SESSION['usuario'] = $usuario;

                //voltar para a home
                header('Location: index.php?rota=home');
            } 
    }

    // login invalido
        $erro = 'Usuário ou senha inválidos.';
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index.php?rota=login" method="post">
        <h3>Login</h3>
        <div>
            <Label for="usuario">Usuário</Label>
            <input type="email" name="usuario" id="usuario">
        </div>
        <div>
            <Label for="senha">Senha</Label>
            <input type="password" name="senha" id="senha">
        </div>
        <div>
            <button type="submit">Entrar</button>
        </div>
    </form>

    <?php if(!empty($erro)) : ?>
        <p style="color: red"><?= $erro ?></p>
    <?php endif; ?>    

</body>
</html>