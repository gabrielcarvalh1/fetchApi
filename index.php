<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="/img/fox-icon.png">
    <link rel="stylesheet" href="style.css">
    <script src="src/js/main.js" defer></script>
    <script src="https://kit.fontawesome.com/998c60ef77.js" crossorigin="anonymous"></script>
    <title>FoxCoder</title>
</head>
<body>
    <div class="main-div">
        <form method="POST">
            <div> 
                <h1>Cadastro de Usúarios</h1>
               <div class="header">
                <button type="button" id="btnDarkTheme" class="icon-moon">Dark Mode <i class="fas fa-moon icon-moon"></i></button>
                <button type="button" id="btnLightTheme" class="icon-sun">Light Mode <i class="fas fa-sun icon-sun"></i></button>
               </div>
            </div>
            <div class="container-sm" >
                <label for="nome" class="form-label text">Nome de Usuário</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="container-sm div-main">
                <label for="senha" class="form-label text">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" style="margin-bottom: 25px">

            </div>
            <div class="container-sm">
                <label for="cep" class="form-label text">Cep</label>
                <input type="text" class="form-control" id="cep" name="cep">
            </div>
            <div class="container-sm">
                <label for="logradouro" class="form-label text">Endereço</label>
                <input type="text" class="form-control" id="logradouro" name="logradouro">
            </div>
            <div class="container-sm">
                <label for="localidade" class="form-label text">Cidade</label>
                <input type="text" class="form-control" id="localidade" name="localidade">
            </div>
            <div class="container-sm text-center">
                <button type="submit" class="btn btn-secondary btn-lg btn-cadastro" id="btn_cadastro" name="acao" value="cadastrar">Cadastrar</button>
            </div>
        </form>
    </div>
    <div class="publicidade">
        <!-- Aqui você pode adicionar o conteúdo da sua publicidade -->
        <img src="/img/Untitled.png" alt="logo" id="img-fox">
    </div>
</body>
<?php
    include('src/js/config.php');
// Verifica se foi feita a ação e se a ação for cadastrar
if(isset($_POST['acao']) && $_POST['acao'] === 'cadastrar'){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $cep = $_POST['cep'];
    $endereco = $_POST['logradouro'];
    $cidade = $_POST['localidade'];

    $sql = "INSERT INTO usuarios (NOME_DE_USUARIO, SENHA, CEP, ENDERECO, CIDADE) VALUES ('{$nome}','{$senha}','{$cep}','{$endereco}','{$cidade}')";

    $res = $conn->query($sql);
}
?>
</html>