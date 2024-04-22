<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use\app\Models\Espece;
class Choisir extends Model
{
    protected $table = 'choisir';
    public $incrementing = false;
    protected $primaryKey = ['ID_BARQUE', 'ID_ESPECE'];
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'ID_BARQUE',
        'ID_ESPECE',
    ];

    public function barque()
    {
        return $this->belongsTo(Barque::class, 'ID_BARQUE', 'ID_BARQUE');
    }

    public function espece()
    {
        return $this->belongsTo(Espece::class, 'ID_ESPECE', 'ID_ESPECE');
    }
}
