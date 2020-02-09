<?php 
$arreglo = [
    'keyStr1'=>'lado',
    0=>'ledo',
    'keyStr2'=>'lido',
    1=>'lodo',
    2=>'ludo'
];
// for($i=0;$i<count($arreglo);$i++){
//     echo $arreglo[$i].',';
// }
foreach($arreglo as $value){
    echo $value.',';
}
echo '<br>decirlo al revés lo dudo.<br>';
// for($i=4;$i>=0;$i--){
//     echo $arreglo[$i].',';
// }
foreach(array_reverse($arreglo) as $value){
    echo $value.',';
}
echo '<br>¡Qué trabajo me ha costado!';
?>