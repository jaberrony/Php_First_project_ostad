<?php

echo "Enter A Number: ";
$number = (int) readline();

if($number > 0){
    echo "The Number is Positive \n";
}elseif($number < 0){
    echo " The Number is Negative \n";
}else{
    echo"The Number is Zero";
}