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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            // Cuando se define un campo que va a hacer una llave foránea, debe tener el mismo tipo
            // de dato y la misma longitud del campo a referencia
            $table->unsignedBigInteger('user_id');
            // A través del método ->foreign, le paso como parámetro, el campo que quiero agregarle la foránea
            // y señalo a qué campo y de qué tabla pertenece dicha relación
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
