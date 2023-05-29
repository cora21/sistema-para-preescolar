<?php

use App\Http\Controllers\MaestraController;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration{
    public function up(): void{
        Schema::create('maestras', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 120);
            $table->string('apellido', 120);
            $table->integer('cedula')->unique();;
            $table->string('salon', 20);
            $table->text('comentarios');
            $table->timestamps();
        });
        
    }
    public function down(): void{
        Schema::dropIfExists('maestras');
    }
};
