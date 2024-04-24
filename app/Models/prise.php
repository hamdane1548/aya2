<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prise extends Model
{
    protected $table = 'prise';
    protected $primaryKey = 'ID_PRISE';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'ID_PRISE',
        'ID_BARQUE',
        'ID_RAIS',
        'ID_ESPECE',
        'ID_PORT',
        'DATE',
        'POIDS',
        'IMAGE',
    ];

    public function barque()
    {
        return $this->belongsTo(Barque::class, 'ID_BARQUE', 'ID_BARQUE');
    }

    public function rais()
    {
        return $this->belongsTo(Rais::class, 'ID_RAIS', 'ID_RAIS');
    }

    public function espece()
    {
        return $this->belongsTo(Espece::class, 'ID_ESPECE', 'ID_ESPECE');
    }

    public function port()
    {
        return $this->belongsTo(Port::class, 'ID_PORT', 'ID_PORT');
    }
}
