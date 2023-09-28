<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamarkos', function (Blueprint $table) {
            $table->id();
            $table->enum('tipe', ['basic', 'premium', 'vip']);
            $table->enum('lantai', ['1', '2', '3']);
            $table->integer('harga',);
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
        Schema::dropIfExists('kamarkos');
    }
};
