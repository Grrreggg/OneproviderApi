<?php
require 'db.php';
//GET DATABASE CONNECTION FROM DB CLASS
$connection = (new Db())->getConnect();
//GET THE ID FROM URL
$id = $_GET['id'];

//QUERY TEMPLATE 
$query = "SELECT id, value FROM `numbers` WHERE id=" . safety_first($id);

$stmt = $connection->prepare($query);
$stmt->execute();

$res = $stmt->fetch(\PDO::FETCH_ASSOC);

//REDIRECT TO RESPONSE GENERATOR
if ($res){
    header("Location: /oneprovider/responser.php?status=200&id=" . $id . "&value=" . $res['value']);
}else{
    header("Location: /oneprovider/responser.php?status=404");
}

//TRIM SOME POTENTIALLY DANGEROUS SYMBOLS
function safety_first($data) {
    $data = str_replace(array("\n", "\r", "\r\n"), ' ', $data);
    $data = strip_tags($data);
    $data = htmlentities($data);
    
    return $data; 	
}
    