<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    
    public function up(): void
    {
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('hourly_rate', 8, 2)->nullable();
            $table->foreignId('vehicle_id')->nullable()->constrained('vehicles')->nullOnDelete();
            $table->decimal('rating', 2, 1)->default(0.0);
            $table->text('bio')->nullable();
            $table->text('languages')->nullable();
            $table->enum('license_type', ['manual', 'automatic', 'both'])->default('both');
            $table->string('license_duration', 50)->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->json('language_preference')->nullable();
            $table->boolean('is_available')->default(true);
            $table->boolean('is_verified')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};
