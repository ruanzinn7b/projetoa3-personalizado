<?php
include("conexao.php");

$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

// Verifica se o nome de usuário já existe no banco de dados
$verificaNome = "SELECT * FROM login WHERE nome = '$nome'";
$result = mysqli_query($conexao, $verificaNome);

if (mysqli_num_rows($result) > 0) {
    echo "Este nome já está em uso. Por favor, escolha outro nome.";
} else {
    $insert = "INSERT INTO login (nome, login, senha) VALUES ('$nome', '$login', '$senha')";
    $query = mysqli_query($conexao, $insert);
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, violet, black);
        }
    </style>
</head>
<body>

</body>
</html>
