<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $lable = 'types';
    protected $fillable = ['nama'];

    public function Product()
    {
        return $this->hasMany(Product::class, 'id', 'type_id');
    }
}
