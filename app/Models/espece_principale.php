<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EspecePrincipale extends Model
{
    protected $table = 'espece_principale';
    protected $primaryKey = 'ID_ESPECE';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'ID_ESPECE',
        'NOM_ESPECE',
        'IMAGE',
    ];

    public function espece()
    {
        return $this->belongsTo(Espece::class, 'ID_ESPECE', 'ID_ESPECE');
    }
}
