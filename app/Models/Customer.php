<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'id_customer';

    protected $fillable = [
        'nama_customer',
        'alamat',
        'jenis_kelamin',
    ];

    public function keluhans()
    {
        return $this->hasMany(Keluhan::class, 'customer_id');
    }
}
