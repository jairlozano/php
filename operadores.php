<?php
$a = 2;
$b = 3;
echo $b.$a + $b;
echo '<br>';
echo $b*($a+$b);
echo '<br>';
echo '--------------------------------------------------';
echo '<br>';
$i = 7;
if($i > 5 && $i < 10){
    echo "$i es mayor que 5 pero menor que 10<br>";
} 
$i = 13;
if($i >= 0 && $i <= 20){
    echo "$i es mayor o igual a 0 pero menor o igual a 20<br>";
}else{
    echo "$i no es mayor o igual a 0 pero menor o igual a 20<br>";
}
$i = '10';
if($i === '10'){
    echo "$i es igual a '10'<br>";
}else{
    echo "$i no es igual a '10'<br>";
} 
$i = 21;
if(($i > 0 && $i < 5) or ($i > 10 && $i < 15)){
    echo "$i es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15";
}else{
    echo "$i no es mayor a 0 ni menor a 5 o no es mayor a 10 y menor a 15";
}
?>