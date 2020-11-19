<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campeonato extends Model
{

    
    protected $table = 'campeonato';
    protected $fillable = ['nome', 'logo_url'];

    public function serie()
    {
        return $this->belongsTo('App\Serie');
    }
}
