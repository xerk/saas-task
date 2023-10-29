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
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('subdomain')->unique(); // tenant
            $table->string('domain')->nullable(); // tenant.domain.com
            $table->string('username')->nullable(); // tenant
            $table->string('charset')->default("utf8mb4"); // utf8mb4
            $table->string('collation')->default("utf8mb4_unicode_ci"); // utf8mb4_unicode_ci
            $table->string('timezone')->default("UTC"); // UTC
            $table->string('locale')->default("en_US"); // en_US
            $table->string('currency')->default("USD"); // USD
            $table->string('currency_symbol')->default("$"); // $
            $table->string('currency_position')->default("left"); // left
            $table->string('active')->default(0); // 1
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
