<?php
findZero('01234'); // found a zero

function findZero($numberString) {
    if (strstr($numberString, '0')) {
        echo 'Encontrando o zero';
    } else {
        echo 'não encontrado o zero';
    }
}
?>