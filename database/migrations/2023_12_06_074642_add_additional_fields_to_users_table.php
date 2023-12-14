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
        Schema::table('users', function (Blueprint $table) {
            // Add new columns
            $table->string('company')->nullable();
            $table->string('tax_id')->nullable();
            $table->string('address')->nullable();
            $table->string('apartment')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->text('comments')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
