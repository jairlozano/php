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
echo '<br>---------------------------------------<br>';
$paises = [
    'Bolivia' => [
        'Tarija',
        'Sucre',
        'Pando'
    ],
    'Chile' => [
        'Santiago',
        'Valdivia',
        'Iquique'
    ],
    'Argentina' => [
        'Tucuman',
        'Salta',
        'Oran'
    ]
];
foreach($paises as $pais => $ciudad){
    echo '<strong>'.$pais.':</strong> ';
    foreach($ciudad as $dep){
        echo ' '.$dep;
    }
    echo '<br>';
}
echo '---------------------------------------<br>';
$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
sort($valores);
for($i=0;$i<3;$i++){
    echo $valores[$i].' ';
}
echo '<br>';
rsort($valores);
for($i=0;$i<3;$i++){
    echo $valores[$i].' ';
}
?>