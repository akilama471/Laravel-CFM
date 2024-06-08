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
        Schema::create('data_members', function (Blueprint $table) {
            $table->id();
            $table->string('name')->required();
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->date('dob')->nullable();
            $table->tinyInteger('status')->nullable()->default(1);
            $table->tinyInteger('visible')->nullable()->default(1);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_members');
    }
};
