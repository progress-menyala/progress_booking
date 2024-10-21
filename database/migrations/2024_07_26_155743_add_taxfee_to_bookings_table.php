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
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('code')->unique();
            $table->string('customer_email')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('phone_number')->nullable();
            $table->datetime('expired_at')->nullable();
            $table->double('sub_total', 14, 2)->nullable();
            $table->double('admin_fee', 14, 2)->nullable();
            $table->double('payment_fee', 14, 2)->nullable();
            $table->double('tax', 14, 2)->nullable();
            $table->double('grand_total', 14, 2)->nullable();
            $table->string('voucher')->nullable();
            $table->string('snap_token', 36)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            //
        });
    }
};
