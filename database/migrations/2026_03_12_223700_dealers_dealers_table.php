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
        Schema::create('dealers_dealers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable()->comment('First Name');
            $table->string('lastname')->nullable()->comment('Last Name');
            $table->unsignedBigInteger('company_id')->nullable()->comment('Company');
            $table->string('email')->nullable()->comment('Work Email');
            $table->string('phone')->nullable()->comment('Phone Number');
            $table->string('fax')->nullable()->comment('Fax Number');
            $table->string('address')->nullable()->comment('Street Address');
            $table->string('city')->nullable()->comment('City');
            $table->unsignedBigInteger('state_id')->nullable()->comment('State');
            $table->string('postcode')->nullable()->comment('Postcode');
            $table->unsignedBigInteger('country_id')->nullable()->comment('Country');
            $table->boolean('active')->default(false)->comment('Status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dealers_dealers');
    }
};
