<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->string('nama_barang')->unique();
            $table->foreignId('brand_id')->constrained('brands')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('type_id')->constrained('types')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('suplier_id')->constrained('supliers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('katalog_id')->constrained('katalogs')->onUpdate('cascade')->onDelete('cascade');
            $table->string('size');
            $table->string('jenis');
            $table->string('qty_stock');
            $table->string('harga');
            $table->longText('deskripsi');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
