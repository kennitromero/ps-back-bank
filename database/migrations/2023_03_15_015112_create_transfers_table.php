<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_origin_id')->nullable();
            $table->unsignedBigInteger('account_destination_id');
            $table->float('amount', 15);
            $table->string('type', 10)->comment('Tipo: depósito y retiro');

            // A través del método ->foreign, le paso como parámetro, el campo que quiero agregarle la foránea
            // y señalo a qué campo y de qué tabla pertenece dicha relación
            $table->foreign('account_origin_id')->on('accounts')->references('id');
            $table->foreign('account_destination_id')->on('accounts')->references('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfers');
    }
};
