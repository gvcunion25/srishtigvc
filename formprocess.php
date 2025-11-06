<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['iname'];
    $dept = $_POST['dept'];

    if (empty($name)){
        echo "No name given brother";
    } else{
        echo "response saved";
    }
}
?>