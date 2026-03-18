<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('logements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('titre');
            $table->string('slug')->unique();
            $table->string('ville');
            $table->string('adresse')->nullable();
            $table->text('description');
            $table->string('type_bien');
            $table->string('type_location');
            $table->decimal('prix', 10, 2);
            $table->string('devise')->default('MAD');
            $table->integer('chambres')->default(1);
            $table->integer('salles_de_bain')->default(1);
            $table->integer('salons')->default(0);
            $table->decimal('surface', 8, 2)->nullable();
            $table->integer('voyageurs')->default(1);
            $table->string('image_principale')->nullable();
            $table->string('statut')->default('en_attente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logements');
    }
    
};
