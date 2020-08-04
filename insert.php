<?php
mb_internal_encoding("utf8");

require "DB.php";

$DB = new DB();
$pdo = $db->connect();

$stmt = $pdo->prepare($db->insert());

bindValue = (1, $_POST['handlename']);
bindValue = (2, $_POST['title']);
bindValue = (3, $_POST['comments']);

$stmt->execute();
$pdo = NULL;

    header("Location:http://localhost/4each_keijiban/index.php");
?>

<!DOCTYPE HTML>
<html lang ="ja">

<head>
    <meta charset="UTF-8">
    <title>掲示板</title>
</head>
    