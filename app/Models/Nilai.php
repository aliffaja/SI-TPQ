<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilais';
    
    protected $fillable = [
        'nilais',
    ];

    public function From_Santri()
    {
        return $this->belongsTo(Santri::class, 'id_santri');
    }

    public function From_Mapel()
    {
        return $this->belongsTo(Mapel::class, 'id_mapel');
    }
}
