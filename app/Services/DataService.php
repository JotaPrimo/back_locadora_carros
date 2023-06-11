<?php

namespace App\Services;

class DataService {

    static function formatarDMY($data) {
        return date('d/m/Y',strtotime($data));;
    }

}

?>