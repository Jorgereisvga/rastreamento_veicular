<?php 
require_once("../../connect.php"); 

$id = $_POST['id'];

$pdo->query("DELETE FROM funcionarios WHERE id = '$id'");


echo 'Excluído com Sucesso!';

?>