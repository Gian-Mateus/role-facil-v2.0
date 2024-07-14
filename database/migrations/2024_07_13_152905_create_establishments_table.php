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
        Schema::create('establishments', function (Blueprint $table) {
            $table->id('establishment_id');
            $table->uuid('slug');
            $table->string('address', 255);
            $table->integer('n_address');
            $table->string('district', 50);
            $table->string('city', 50);
            $table->string('uf', 2);
            $table->string('zipcode', 8);
            $table->string('country', 50);
            $table->string('lat', 20);
            $table->string('lng', 20);
            $table->text('links_social_medias');
            $table->string('phone', 11);
            $table->string('phone_other', 11);
            $table->text('photos');
            $table->timestamps();
            //Foreing Keys
            $table->foreignId('user_id')
                    ->constrained('users', 'user_id')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('establishments');
    }
};
