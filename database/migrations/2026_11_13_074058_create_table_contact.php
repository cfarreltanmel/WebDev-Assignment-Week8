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
        Schema::create('table_contact', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('cardTitle');
            $table->string('name');
            $table->string('email');
            $table->text('mailContent');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_contact');
    }
};
