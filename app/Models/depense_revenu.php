<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DepenseRevenu extends Model
{
    protected $table = 'depense_revenu';
    protected $primaryKey = 'ID_DEPENSE_REVENU';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'ID_DEPENSE_REVENU',
        'ID_TYPE',
        'ID_RAIS',
        'MONTANT',
        'DATE',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class, 'ID_TYPE', 'ID_TYPE');
    }

    public function rais()
    {
        return $this->belongsTo(Rais::class, 'ID_RAIS', 'ID_RAIS');
    }
}
