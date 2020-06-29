<?php 

$carreer=[1 =>"Sofware",
2 =>"Multimedia",
3 =>"Mecatronica",
4 =>"Redes",
5 =>"Seguridad Informatica"
];


function getLastElement($list){

    $countList = count($list);
    $lasElement = $list[$countList - 1];


    return $lasElement;
}

function getCarreerName($carreerId){

    return $GLOBALS['$carreer'] [$carreerId];
}




?>