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
        Schema::create('dealer_contact_informations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dealer_id')->nullable()->comment('Dealer ID');
            $table->string('firstname')->nullable()->comment('First Name');
            $table->string('lastname')->nullable()->comment('Last Name');
            $table->string('email')->nullable()->comment('Work Email');
            $table->string('phone')->nullable()->comment('Phone Number');
            $table->string('fax')->nullable()->comment('Fax Number');
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
        Schema::dropIfExists('dealer_contact_informations');
    }
};
