<?php

class Problema{

    public function verificarBissexto(int $ano){
        if($ano <= 0){
            return false;
        }else{
            if($ano % 4 == 0 && $ano % 100 != 0){
                return true;
            }elseif($ano % 100 == 0 && $ano % 400 == 0){
                return true;
            }else{
                return false;
            }
        }
    }

    public function romanoParaDecimal(String $romano){
        return 0;
    }
}