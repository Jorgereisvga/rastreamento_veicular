<?php 
require_once("../../connect.php"); 

$id = $_POST['id'];

$pdo->query("DELETE FROM disciplinas WHERE id = '$id'");


echo 'Excluído com Sucesso!';

?>