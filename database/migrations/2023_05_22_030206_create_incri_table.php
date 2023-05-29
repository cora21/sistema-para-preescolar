<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void{
        Schema::create('incri', function (Blueprint $table) {
            $table->id();
            $table->string('nom_ape', 120)->nullable(false);
            $table->string('sexo', 15)->nullable(false);
            $table->date('fechanaci')->nullable();
            $table->string('condiciones')->nullable();
            $table->text('comentario')->nullable();
            $table->string('nom_ape_ma', 120)->nullable();
            $table->string('correoma', 120)->nullable(false);
            $table->string('cedulama', 20)->nullable();
            $table->string('telefo1ma', 20)->nullable();
            $table->string('telefo2ma', 20)->nullable();
            $table->text('legalesma')->nullable();
            $table->text('comentarioma')->nullable();
            $table->string('nom_ape_pa', 120)->nullable();
            $table->string('correopa', 120)->nullable(false);
            $table->string('cedulapa', 20)->nullable();
            $table->string('telefo1pa', 20)->nullable();
            $table->string('telefo2pa', 20)->nullable();
            $table->text('legalespa')->nullable();
            $table->text('comentariopa')->nullable();
            $table->string('nom_ape_auto', 120)->nullable();
            $table->string('cedu', 20)->nullable();
            $table->text('comentarioauto')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void{
        Schema::dropIfExists('incri');
    }
};
