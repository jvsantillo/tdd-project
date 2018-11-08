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

    public function romanoParaDecimal(String $numeroRomano){
        $numeroRomano = strtoupper($numeroRomano);

        $conjunto_convertido = array();


        for ($i = 0; $i < strlen($numeroRomano); $i++) {
            switch ($numeroRomano[$i]) {
                case 'I':
                    $conjunto_convertido[] = 1;
                    break;
                case 'V':
                    $conjunto_convertido[] = 5;
                    break;
                case 'X':
                    $conjunto_convertido[] = 10;
                    break;
                case 'L':
                    $conjunto_convertido[] = 50;
                    break;
                case 'C':
                    $conjunto_convertido[] = 100;
                    break;
                case 'D':
                    $conjunto_convertido[] = 500;
                    break;
                case 'M':
                    $conjunto_convertido[] = 1000;
                    break;
                default:
                    return -1;
            }
        }

        $soma = 0;


        for($i = 0; $i < count($conjunto_convertido); $i++){
            if(isset($conjunto_convertido[$i + 1])){
                if($conjunto_convertido[$i] < $conjunto_convertido[$i + 1]){
                    $soma -= $conjunto_convertido[$i];
                }else{
                    $soma += $conjunto_convertido[$i];
                }
            }else{
                $soma += $conjunto_convertido[$i];
            }
        }

        if($soma >= 1 && $soma <= 4999){
            return $soma;
        }else{
            return -1;
        }
    }
}