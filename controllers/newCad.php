<?php
include 'conexao.php';

$user = filter_input(INPUT_POST, 'user');
$mail = filter_input(INPUT_POST, 'mail');
$psswd = md5(filter_input(INPUT_POST, 'psswd'));
$repeatPsswd = md5(filter_input(INPUT_POST, 'repeatPsswd'));


if ($psswd == $repeatPsswd) {
    try {

        $stmt = $conn->prepare('INSERT INTO usuarios(id, nome, email, senha) VALUES(null, :nome, :email, :senha)');
        $stmt->execute(array(
          ':nome' => $user,
          ':email' => $mail,
          ':senha' => $psswd
        ));
      
        echo $stmt->rowCount();
      } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
      }
   
    header('Location:../index.php');


}else {
    echo "<script>alert('Senhas não conferem');</script>";
}