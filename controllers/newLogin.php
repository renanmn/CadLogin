<?php
include 'conexao.php';
$user = filter_input(INPUT_POST, 'user');
$psswd = md5(filter_input(INPUT_POST, 'psswd'));

try {

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE nome ='$user' and senha = '$psswd'");
    $stmt -> execute();
    $select = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (empty($select)) {
            echo "<script>confirm('Dados não existem no banco de dados');
            window.location.href = '../index.php';</script>";
        }else {
            session_start();            
            $sessaoUser = $_SESSION['nome'] = $user;
            echo "<script>confirm('Logado com o usuario: {$sessaoUser}');
            window.location.href = '../index.php';</script>";
        }
   
} catch(PDOException $e) {
    echo "<script>confirm('Dados invalidos, erro: {$e}');</script>";
}
