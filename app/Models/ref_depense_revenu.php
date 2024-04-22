<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefDepenseRevenu extends Model
{
    protected $table = 'ref_depense_revenu';
    protected $primaryKey = 'ID_DPR';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'ID_DPR',
        'ID_TYPE',
        'TITRE',
        'UNITE',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class, 'ID_TYPE', 'ID_TYPE');
    }
}
