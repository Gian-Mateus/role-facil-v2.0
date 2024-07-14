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
        Schema::create('freelancers', function (Blueprint $table) {
            $table->id('freelancer_id');
            $table->string('title', 50);
            $table->string('description', 255);
            $table->string('value', 255);
            $table->string('form_payment', 255);
            $table->text('date_need'); // campo em forma de texto para o caso de necessitar de fixo, podendo ser preenchido com array dos dias necessários, ou opção de fixo
            $table->boolean('active');
            $table->timestamps();

            //Foreing Keys
            $table->foreignId('establishment_id')
                    ->constrained('establishments', 'establishment_id')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freelancers');
    }
};
