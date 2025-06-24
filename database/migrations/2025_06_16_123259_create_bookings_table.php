<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('learner_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('instructor_id')->constrained('instructors')->onDelete('cascade');
            $table->foreignId('vehicle_id')->nullable()->constrained('vehicles')->nullOnDelete();
            $table->enum('status', ['pending', 'confirmed', 'completed', 'cancelled'])->default('pending');
            $table->dateTime('booking_datetime');
            $table->text('pickup_location')->nullable();
            $table->text('dropoff_location')->nullable();
            $table->decimal('total_price', 10, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};

