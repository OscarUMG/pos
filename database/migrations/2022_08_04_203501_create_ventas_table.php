<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->double('monto_neto');
            $table->double('monto_imp');
            $table->double('costo_neto');
            $table->double('costo_imp');
            $table->foreignId('tipo_documentos_id')->constrained();
            $table->integer('documento');
            $table->foreignId('cliente_id')->constrained();
            $table->double('unidades');
            $table->foreignId('medio_pago_id')->constrained($tables = 'mediosdepagos');
            $table->timestamps();
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}