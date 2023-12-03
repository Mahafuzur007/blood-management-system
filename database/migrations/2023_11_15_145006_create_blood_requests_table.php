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
        Schema::create('blood_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('bag_quantity');
            $table->integer('dob');
            $table->string('note');
            $table->date('req_date');
            $table->string('status');
            $table->string('updated_by');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('blood_group_id');
            $table->foreign('blood_group_id')->references('id')->on('blood_groups');
            $table->unsignedBigInteger('division_id');
            $table->foreign('division_id')->references('id')->on('divisons');
            $table->unsignedBigInteger('district_id');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->unsignedBigInteger('upazillas_id');
            $table->foreign('upazillas_id')->references('id')->on('upazillas');
            $table->unsignedBigInteger('post_office_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood_requests');
    }
};
