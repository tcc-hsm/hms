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
            $table->string('id_cliente');
            $table->string('hora_entrada');
            $table->string('hora_minuto');
            $table->string('hora_saida');
            $table->string('hora_saida');
            $table->string('id_quarto');
            $table->string('status');
            $table->string('check_in');
            $table->string('check_out');
            $table->string('total');
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
