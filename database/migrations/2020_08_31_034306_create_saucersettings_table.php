<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaucersettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('saucersettings', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('nombre');
                $table->string('descripcion');
                $table->string('precio');
                $table->string('foto');
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('saucersettings');
    }
}
