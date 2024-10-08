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
        Schema::create('comments_and_ratings', function (Blueprint $table) {
            $table->id('comment_rating_id');
            $table->uuid('slug');
            $table->text('comment');
            $table->string('rating', 1);
            $table->timestamps();

            //Foreing Keys
            $table->foreignId('establishment_id')
                    ->constrained('establishments', 'establishment_id')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
                    
            $table->foreignId('event_id')
                    ->constrained('events', 'event_id')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments_and_ratings');
    }
};
