<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="processa.php" method="post">
        <label>Nome de Usuário:</label>
        <input type="text" name="nome_usuario" placeholder="Digite seu nome de usuário"> <br>
        <label>CPF:</label>
        <input type="number" name="cpf" placeholder="Digite seu cpf"> <br>
        <label>Endereço:</label>
        <input type="text" name="endereco" placeholder="Digite seu Endereço"> <br>
        <label>Telefone:</label>
        <input type="number" name="tel" placeholder="Digite seu telefone"> <br>
        <label>nascimento:</label>
        <input type="text" name="nasc" placeholder="Coloque sua data de nascimento"> <br>
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu nome"> <br>
        <label>Senha:</label>
        <input type="password" name="senha" placeholder="Digite sua senha"> <br>

        <input type="submit"  value="Cadastrar">
    </form>
</body>
</html>
