<?php

use App\Serie;

function GetTeamQtd($str)
{
    if ($str == "total") {
        $qtd_serie_a = Serie::find(1)->campeonato->count();
        $qtd_serie_b = Serie::find(2)->campeonato->count();
        $qtd_serie_c = Serie::find(3)->campeonato->count();
        $qtd_sum = $qtd_serie_a + $qtd_serie_b + $qtd_serie_c;
        return $qtd_sum;
    } else if ($str == "serie-a") {
        $qtd_serie_a = Serie::find(1)->campeonato->count();
        return $qtd_serie_a;
    } else if ($str == "serie-b") {
        $qtd_serie_b = Serie::find(2)->campeonato->count();
        return $qtd_serie_b;
    } else if ($str == "serie-c") {
        $qtd_serie_c = Serie::find(3)->campeonato->count();
        return $qtd_serie_c;
    } else{
        return "";
    }
}


