<?php 

$age = 15;

if($age == 6 || $age == 7){
    echo "poussin";
}elseif($age == 8 || $age ==9){
    echo "pupille";
}elseif($age == 10 || $age == 11){
    echo "minime";
}elseif($age > 12){
    echo "cadet";
}else{
    echo "age non pris en charge";
}
