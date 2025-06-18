<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('instructor_wwcc', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instructor_id')->constrained('instructors')->onDelete('cascade');
            $table->string('full_name');
            $table->date('date_of_birth');
            $table->string('wwcc_number', 100);
            $table->date('expiry_date');
            $table->date('verification_date')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('instructor_wwcc');
    }
};
