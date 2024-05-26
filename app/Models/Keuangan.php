<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    use HasFactory;

    protected $table = 'keuangans';
    
    protected $fillable = [
        'jumlah_bayar',
    ];

    public function From_Santri()
    {
        return $this->belongsTo(Pengguna::class, 'id_santri');
    }

}
