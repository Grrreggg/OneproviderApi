<?php
//GENERATES JSON RESPONSE FROM URL ARGS
switch ($_GET['status']){
    case (404):
        $myObj = array(
            "code"=> 404,
            "message"=>"Something's wrong.",
        );
        $myJSON = json_encode($myObj);
        echo $myJSON;
    break;

    case (200):
        $myObj = array(
            "code"=> 200,
            "id"=>$_GET['id'],
            "value"=>$_GET['value'],
            "message"=>"All's good.",
        );
        $myJSON = json_encode($myObj);
        echo $myJSON;    
    break;
}

