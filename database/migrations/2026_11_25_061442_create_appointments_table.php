<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            // Made nullable so you don't need a login system right now
           $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('client_name');
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};