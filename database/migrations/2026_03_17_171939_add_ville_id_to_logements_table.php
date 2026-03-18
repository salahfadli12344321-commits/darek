<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('logements', function (Blueprint $table) {
        $table->unsignedBigInteger('id_ville')->nullable();

        $table->foreign('id_ville')
              ->references('id_ville')->on('villes')
              ->onDelete('set null');
    });
}

    /**
     * Reverse the migrations.
     */
public function down(): void
{
    Schema::table('logements', function (Blueprint $table) {
        $table->dropForeign(['id_ville']);
        $table->dropColumn('id_ville');
    });
}
};
