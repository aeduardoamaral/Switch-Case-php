<?php

$opc=4;
switch($opc){
    case (1):
        echo "Carro";
        break;
    case(2):
        echo"Moto";
        break;
    case(3):
        echo"Bicicleta";
        break;
    case(4):
        echo"Navio";
        break;
    case(5):
        echo"Avião";
        break;
    default:
            echo"Valor inválido";
            break;        
}

echo"<br/>";

switch($opc){
    case ($opc <=3 and $opc > 0):
        echo "Transporte terrestre";
        break;
    case($opc==4):
            echo"Transporte Maritimo";
        break;    
    case($opc==5):
        echo"Transporte aéreo";
        break;



}















?>