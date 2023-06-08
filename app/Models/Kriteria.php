<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;
    protected $table = 'kriterias';
    protected $fillable = [
        'nama_kriteria',
        'jenis_kriteria',
    ];

    public function bobots()
    {
        return $this->hasOne(Bobot::class);
    }


    public function nilais()
    {
        return $this->hasOne(Nilai::class);
    }

}
