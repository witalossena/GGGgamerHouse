<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{

    protected $table = 'serie';

    public function campeonato()
    {
        return $this->hasMany('App\Campeonato');
    }
}
