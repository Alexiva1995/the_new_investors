<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInversionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inversiones', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('invertido');
            $table->enum('tipo_interes', ['lineal', 'compuesto'])->nullable();
            $table->date('fecha_consignacion')->nullable();
            $table->string('referente');
            $table->longtext('comprobante_consignacion')->nullable();
            $table->enum('periodo_mes', ['1', '2'])->comment('1 - del 1 al 15, 2 - del 16 al 30 o (31)');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('inversiones');
    }
}
