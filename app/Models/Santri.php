<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $table = 'santris';
    
    protected $fillable = [
        'nama_santri',
        'no_hp',
        'email',
        'kelas',
    ];

    public function From_Pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_santri');
    }

    public function From_WaliSantri()
    {
        return $this->belongsTo(WaliSantri::class, 'id_walisantri');
    }
}
