<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    use HasFactory;
    protected $lable = 'supliers';
    protected $fillable = ['perusahaan', 'email', 'telp', 'alamat', 'negara'];

    public function Product()
    {
        return $this->hasMany(Product::class, 'id', 'suplier_id');
    }
}
