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
        Schema::create('http_logs', function (Blueprint $table) {
            $table->id();
            $table->string('method', 8);
            $table->string('path', 2000);
            $table->string('ip', 45);
            $table->json('data');
            $table->text('user_agent');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('http_logs');
    }
};
