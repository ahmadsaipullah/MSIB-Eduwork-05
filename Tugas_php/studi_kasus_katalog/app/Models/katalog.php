<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class katalog extends Model
{
    use HasFactory;
    protected $lable = 'katalogs';
    protected $fillable = ['nama'];

    public function Product()
    {
        return $this->hasMany(Product::class, 'id', 'katalog_id');
    }
}
