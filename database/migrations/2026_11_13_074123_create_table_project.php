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
        Schema::create('table_project', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('projectTitle');
            $table->text('projectDescription');
            $table->string('projectLink');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_project');
    }
};
