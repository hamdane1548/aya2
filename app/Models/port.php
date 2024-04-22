<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Region;
class Port extends Model
{
    protected $table = 'port';
    protected $primaryKey = 'ID_PORT';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'ID_PORT',
        'ID_REGION',
        'NOM_PORT',
        'LATITUDE',
        'LONGITUDE',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class, 'ID_REGION', 'ID_REGION');
    }
}
