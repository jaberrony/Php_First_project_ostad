<?php

define("USERNAME", "Rony");
define("PASSWORD","123456");

echo "Enter Your UserName: ";
$inputUsername= readline();

echo"Enter Your Password: ";
$inputPassword = readline();

if($inputUsername === USERNAME && $inputPassword === PASSWORD){
    echo"Login Successful";
}else{
    echo"Invalid UserName or Password";
}