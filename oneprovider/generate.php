<?php
require 'db.php';
//GET DATABASE CONNECTION FROM DB CLASS
$connection = (new Db())->getConnect();

//GENERATE RANDOM VALUE
$value = rand(0, 10000);

//QUERY ARE ALWAYS THE SAME HERE
$query = "INSERT INTO `numbers` (`id`, `value`) VALUES (NULL, " . $value . ")";

$stmt = $connection->prepare($query);

//REDIRECT TO RESPONSE GENERATOR
if ($stmt->execute()){
    $id = $connection->lastInsertId();
    header("Location: /oneprovider/responser.php?status=200&id=" . $id . "&value=" . $value);
}else{
    header("Location: /oneprovider/responser.php?status=404");
}

