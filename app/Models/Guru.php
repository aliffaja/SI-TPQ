<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'gurus';
    
    protected $fillable = [
        'nama',
        'alamat',
    ];

    public function From_Pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }

    public function From_Mapel()
    {
        return $this->belongsTo(Mapel::class, 'id_mapel');
    }
}
