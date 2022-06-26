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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('penjual');
            $table->string('pembeli');
            $table->foreignId('sertipikat_id')->constrained();
            $table->date('tgl_bkd')->nullable();
            $table->string('ket_bkd')->nullable();
            $table->date('tgl_kpp')->nullable();
            $table->string('ket_kpp')->nullable();
            $table->date('tgl_bpn')->nullable();
            $table->string('no_akta')->nullable();
            $table->string('ket_bpn')->nullable();
            $table->text('catatan')->nullable();
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('orders');
    }
};
