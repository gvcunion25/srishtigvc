<?php
$name = $dept = "";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if (empty($_POST["iname"])){
        $name="no name provided";
    } else{
        $name=$_POST["iname"];
    }
}
return $name;
?>