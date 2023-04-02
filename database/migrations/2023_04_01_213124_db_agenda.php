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
        //
        Schema::create('db_agenda', function (Blueprint $table) {
            $table->id();
            $table->string('data');
            $table->string('nome');
            $table->string('hora');
            $table->string('minuto');
            $table->string('id_quarto');
            $table->string('status');
            $table->string('updated_at');
            $table->string('created_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
