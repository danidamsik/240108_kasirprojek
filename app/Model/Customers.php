<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model {
    protected $table = "customers";
    protected $primaryKey = "customer_id";
    
    protected $fillable = [
        'nama', 'alamat', 'created_at','updated_at'
    ];
}