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
        Schema::create('adherents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('tel');
            $table->string('cin');
            $table->string('adress');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('gov_id');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')
                ->on('cities');
            $table->foreign('gov_id')->references('id')
                ->on('gouvernorats')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adherents');
    }
};
