<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model {
    protected $table = "stocks";
    protected $primaryKey = "stock_id";
    
    protected $fillable = [
        'nama_barang', 'harga_beli', 'harga_jual', 'created_at','updated_at'
    ];
}