<?php

namespace App\Services;

class StringService {

    static function trimAndStrtoUpper($value) {
        return trim(strtoupper($value));
    }

    static function removerCaracteresEspeciais($string) {
        $string = str_replace(' ', '-', $string); // Substitui todos os espaços por hifens.
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Remove caracteres especiais
     
        return preg_replace('/-+/', '-', $string); // Substitui vários hífens por um único.
    }


}

?>