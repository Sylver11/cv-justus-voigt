<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php

$object = new User;

print_r($object);

echo "<br>"
//call to method
$object->save_user();


class User{
    //class properties AKA fields
    public $name, $password;


    //class method AKA function 
    function save_user(){
        echo "save user code goes here"
    }
}




?>
    <script>
    
    
    
    
    
    
    </script>
</body>
</html>