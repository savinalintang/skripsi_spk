<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table = 'nilais';
    protected $fillable = [
        'alternatifs_id',
        'kriterias_id',
        'nilai_awal',
        'nilai_utility',
        'nilai_akhir',
    ];

    public function alternatifs()
    {
        return $this->belongsTo(Alternatif::class, 'alternatifs_id');
    }

    public function kriterias()
    {
        return $this->belongsTo(Kriteria::class, 'kriterias_id');
    }
}
