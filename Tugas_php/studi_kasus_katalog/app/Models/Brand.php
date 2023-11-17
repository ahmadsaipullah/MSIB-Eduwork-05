<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $lable = 'brands';
    protected $fillable = ['nama'];

    public function Product()
    {
        return $this->hasMany(Product::class, 'id', 'brand_id');
    }
}
