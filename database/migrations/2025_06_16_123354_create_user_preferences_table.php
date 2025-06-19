<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('user_preferences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('preferred_pickup_address', 250)->nullable();
            $table->string('suburb', 250)->nullable();
            $table->string('state', 250)->nullable();
            $table->enum('preferred_transmission', ['manual', 'auto'])->nullable();
            $table->json('notification_settings')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_preferences');
    }
};
