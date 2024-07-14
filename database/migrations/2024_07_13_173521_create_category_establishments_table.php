<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('category_establishments', function (Blueprint $table) {

            //Foreing Keys
            $table->foreignId('establishment_id')
                    ->constrained('establishments', 'establishment_id')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreignId('category_id')
                    ->constrained('categories', 'category_id')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_establishments');
    }
};
