<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealStateType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_state_type', function (Blueprint $table) {
            $table->id();
            $table->enum('type' , ['casa' , 'duplex' , 'departamento' , 'pensionado' , 'pensionado estudiantil']);
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
        Schema::dropIfExists('real_state_type');
    }
}
