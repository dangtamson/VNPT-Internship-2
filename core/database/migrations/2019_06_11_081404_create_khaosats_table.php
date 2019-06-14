<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhaosatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khaosats', function (Blueprint $table) {
            $table->bigIncrements('id_ks');
            $table->timestamps();
            $table->string('tenks');
            $table->date('ngaybd');
            $table->date('ngaykt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khaosats');
    }
}
