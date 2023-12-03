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
        Schema::create('upazillas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('division_id')->nullable()->references('id')->on('divisons')->onDelete('set null');
            $table->foreignId('district_id')->nullable()->references('id')->on('districts')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('upazillas', function (Blueprint $table) {
            $table->dropForeign(['division_id']);
            $table->dropForeign(['district_id']);
        });
        Schema::dropIfExists('upazillas');
    }
};
