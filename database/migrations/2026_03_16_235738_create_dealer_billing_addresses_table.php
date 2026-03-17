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
        Schema::create('dealer_billing_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dealer_id')->nullable()->comment('Dealer ID');
            $table->string('address')->nullable()->comment('Street Address');
            $table->string('city')->nullable()->comment('City');
            $table->unsignedBigInteger('state_id')->nullable()->comment('State');
            $table->string('postcode')->nullable()->comment('Postcode');
            $table->unsignedBigInteger('country_id')->nullable()->comment('Country');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('dealer_id')->references('id')->on('dealer_dealers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dealer_billing_addresses');
    }
};
