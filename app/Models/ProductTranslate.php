<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTranslate extends Model
{
    use HasFactory;
    protected  $tabel = 'product_translates';
    protected  $primaryKey = 'id';
    protected  $fillable = ['name', 'info', 'key', 'product_id', 'fraction', 'size', 'packaging', 'color', 'form', 'sort', 'wet', 'drying_type'];

    public function translate(){
        return $this->belongsTo(Product::class);
    }
}
