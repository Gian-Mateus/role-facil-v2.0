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
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id');
            $table->uuid('slug');
            $table->string('title', );
            $table->text('description');
            $table->date('date_event');
            $table->string('locale_event_address', 255);
            $table->integer('locale_event_n_address');
            $table->string('locale_event_district', 50);
            $table->string('locale_event_city', 50);
            $table->string('locale_event_uf', 2);
            $table->string('locale_event_zipcode', 8);
            $table->string('locale_event_country', 50);
            $table->string('classification', 5);
            $table->text('photos');
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
        Schema::dropIfExists('events');
    }
};
