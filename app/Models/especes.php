<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Espece extends Model
{
    protected $table = 'especes';
    protected $primaryKey = 'ID_ESPECE';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'ID_ESPECE',
        'NOM_ESPECE',
        'IMAGE',
    ];
}
