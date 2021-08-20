<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('product_categories')->onDelete('cascade');

            $table->string('name_en');
            $table->text('product_about_en');
            $table->text('product_info_en')->nullable();

            $table->string('name_ru')->nullable();
            $table->text('product_about_ru')->nullable();
            $table->text('product_info_ru')->nullable();

            $table->string('name_de')->nullable();
            $table->text('product_about_de')->nullable();
            $table->text('product_info_de')->nullable();

            $table->string('name_es')->nullable();
            $table->text('product_about_es')->nullable();
            $table->text('product_info_es')->nullable();

            $table->string('name_it')->nullable();
            $table->text('product_about_it')->nullable();
            $table->text('product_info_it')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
