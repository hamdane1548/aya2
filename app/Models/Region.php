<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Port;

class Region extends Model
{
    protected $table = 'region';
    protected $primaryKey = 'ID_REGION';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'ID_REGION',
        'NOM_REGION',
    ];

    // Relation avec les ports
    public function ports()
    {
        return $this->hasMany(Port::class, 'ID_REGION', 'ID_REGION');
    }
}
