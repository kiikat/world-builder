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
        {
            Schema::create('world', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('climate');
                $table->string('resources');
                $table->string('geography');
                $table->string('language');
                $table->string('religion')->nullable();;
                $table->string('history');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('world');
    }
};
