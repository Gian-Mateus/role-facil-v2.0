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
        Schema::create('clients_coupons', function (Blueprint $table) {
            
            //Foreing Keys
            $table->foreignId('client_id')
                    ->constrained('clients', 'client_id')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
                    
            $table->foreignId('coupon_id')
                    ->constrained('coupons', 'coupon_id')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients_coupons');
    }
};
