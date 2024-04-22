<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rais extends Model
{
    protected $table = 'rais';
    protected $primaryKey = 'ID_RAIS';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'ID_RAIS',
        'NOM_RAIS',
    ];
}
