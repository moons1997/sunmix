<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->integer('type_id');

            $table->string('name_en');
            $table->string('name_ru')->nullable();
            $table->string('name_de')->nullable();
            $table->string('name_es')->nullable();
            $table->string('name_it')->nullable();

            $table->text('info_en');
            $table->text('info_ru')->nullable();
            $table->text('info_de')->nullable();
            $table->text('info_es')->nullable();
            $table->text('info_it')->nullable();

            $table->string('img');

            $table->tinyInteger('order');

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
        Schema::dropIfExists('sections');
    }
}
