<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasTranslations;
    protected  $tabel = 'products';
    protected  $primaryKey = 'id';

    protected  $fillable = [
            'category_id',
            'name_en',
            'product_about_en',
            'product_info_en',
            'name_ru',
            'product_about_ru',
            'product_info_ru',
            'name_de',
            'product_about_de',
            'product_info_de',
            'name_es',
            'product_about_es',
            'product_info_es',
            'name_it',
            'product_about_it',
            'product_info_it'
    ];

    public $translatable = [
        'name_enasdsad',
    ];

//    public function getTranslation(string $attributeName, string $locale, bool $useFallbackLocale = true) : string;

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function product_categories(){
        return $this->hasOne(ProductCategory::class, 'id', 'category_id');
    }

}
