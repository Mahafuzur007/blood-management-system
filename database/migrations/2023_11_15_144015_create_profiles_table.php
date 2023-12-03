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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('gender');
            $table->integer('age');
            $table->integer('dob');
            $table->string('village');
            $table->string('image')->nullable();
            $table->string('last_donate');
            $table->integer('donation_count');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('blood_group_id');
            $table->foreign('blood_group_id')->references('id')->on('blood_groups');
            $table->unsignedBigInteger('division_id');
            $table->foreign('division_id')->references('id')->on('divisons');
            $table->unsignedBigInteger('district_id')->nullable();
            $table->foreign('district_id')->references('id')->on('districts');
            $table->unsignedBigInteger('upazillas_id')->nullable();
            $table->foreign('upazillas_id')->references('id')->on('upazillas');
            $table->unsignedBigInteger('post_office_id')->nullable();
            $table->foreign('post_office_id')->references('id')->on('post_offices');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
