<?php 
require_once("../../connect.php"); 

$id = $_POST['id'];

$query = $pdo->query("SELECT * FROM motoristas where id = '$id' ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$cpf_usu = $res[0]['cpf'];

$query_id = $pdo->query("SELECT * FROM usuarios where cpf = '$cpf_usu' ");
$res_id = $query_id->fetchAll(PDO::FETCH_ASSOC);
$id_usu = $res_id[0]['id'];


$pdo->query("DELETE FROM motoristas WHERE id = '$id'");
$pdo->query("DELETE FROM usuarios WHERE id = '$id_usu'");

echo 'Excluído com Sucesso!';

?>