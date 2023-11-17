<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $lable = 'products';
    protected $fillable = ['kode', 'nama_barang', 'brand_id', 'type_id', 'suplier_id', 'katalog_id', 'size', 'qty_stock', 'jenis', 'harga', 'deskripsi', 'image'];

    public function Brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function Type()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }

    public function Suplier()
    {
        return $this->belongsTo(Suplier::class, 'suplier_id', 'id');
    }

    public function katalog()
    {
        return $this->belongsTo(katalog::class, 'katalog_id', 'id');
    }
}
