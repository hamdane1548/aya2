<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\BarqueController;
class Barque extends Model
{
    protected $table = 'barque';
    protected $primaryKey = 'ID_BARQUE';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'ID_BARQUE',
        'ID_PORT',
        'ID_RAIS',
        'MARTICULE',
        'EQUIPE_NOMBRE',
        'CODEBARRQUE',
        'MESURE',
    ];

    public function port()
    {
        return $this->belongsTo(Port::class, 'ID_PORT', 'ID_PORT');
    }

    public function rais()
    {
        return $this->belongsTo(Rais::class, 'ID_RAIS', 'ID_RAIS');
    }
}
