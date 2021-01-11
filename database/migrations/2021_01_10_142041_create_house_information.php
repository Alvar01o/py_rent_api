<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHouseInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_information', function (Blueprint $table) {
            $table->id();
            $table->point('coordinate');
            $table->string('description');
            $table->enum('status',['disponible' , 'reservado', 'ocupado'])->default('disponible');
            $table->float('price');
            $table->string('currency');
            $table->enum('period',['day' , 'week', 'month', 'year'])->default('month');
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
        Schema::dropIfExists('house_information');
    }
}
