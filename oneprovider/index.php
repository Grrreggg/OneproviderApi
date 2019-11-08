<?php
//GET URL TO ROUTE
$request = $_SERVER['REQUEST_URI'];

//ROUTER
if(strpos($request, '/oneprovider/api/generate') !== false){
    header("Location: /oneprovider/generate.php");

}elseif(strpos($request, '/oneprovider/api/retrieve') !== false){
    $matches = array();
    $id = '';
    //GET ID VIA REGULAR EXPRESSION
    preg_match('~(\d+)~', $request, $matches );

    if (!isset($matches[1])){
        header("Location: /oneprovider/responser.php?status=404");
        return;
    }

    $id = $matches[1];
    header("Location: /oneprovider/retrieve.php?id=" . $id);
}
else{
    header("Location: /oneprovider/responser.php?status=404");
}
?>