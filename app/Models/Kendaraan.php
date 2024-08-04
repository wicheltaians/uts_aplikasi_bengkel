<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan';
    public $timestamps = false;

    protected $fillable = [
        'no_pol',
        'no_mesin',
        'merek',
        'warna',
    ];

    public function keluhans()
    {
        return $this->hasMany(Keluhan::class, 'no_pol');
    }
}
