<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;

    protected $table = 'keluhan';
    protected $primaryKey = 'id_keluhan';

    protected $fillable = [
        'nama_keluhan',
        'ongkos',
        'no_pol',
        'customer_id',
        'id_pegawai',
    ];

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'no_pol');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
}
