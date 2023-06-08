<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bobot extends Model
{
    use HasFactory;
    protected $table = 'bobots';
    protected $fillable = [
        'nilai_bobot',
        'bobots',
        'kriterias_id',
    ];

    public function kriterias()
    {
        return $this->belongsTo(Kriteria::class, 'kriterias_id');
    }

}
