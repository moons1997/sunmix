<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected  $tabel = 'product_categories';
    protected  $primaryKey = 'id';
    protected  $fillable = ['name_en', 'name_ru', 'name_de', 'name_es', 'name_it'];

//    public function product(){
//        return $this->hasOne(Product::class, 'category_id', 'id');
//    }
    use HasFactory;
}
