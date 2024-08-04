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
        Schema::table('destinations~', function (Blueprint $table) {
            $table->string('maps');
            $table->string('slug')->unique();
            $table->string('featured_image');
            $table->string('status');
            $table->datetimes('opening_hours');
            $table->string('contact_info');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('destinations~', function (Blueprint $table) {
            //
        });
    }
};
