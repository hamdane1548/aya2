<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marker extends Model
{
    protected $table = 'marker';
    protected $primaryKey = 'ID_MARKERS';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'ID_MARKERS',
        'ID_RAIS',
        'LATITUDE',
        'LONGITUDE',
        'NOM_LIEU',
    ];

    public function rais()
    {
        return $this->belongsTo(Rais::class, 'ID_RAIS', 'ID_RAIS');
    }
}
