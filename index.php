<?php
require 'src/Problema.php';

$p = new Problema();

if($p->verificarBissexto(88)){
    echo "é bissexto";
}else{
    echo "não é";
}
