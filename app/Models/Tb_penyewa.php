<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tb_penyewa extends Model
{
    use HasFactory;

    public function mobil()
    {
        //melalui fk "author_id"
        return $this->belongsTo('App\Models\Tb_mobil', 'id_mobil');

    }

    public function user()
    {
        //melalui fk "author_id"
        return $this->belongsTo('App\Models\User', 'id_user');

    }

    
}
