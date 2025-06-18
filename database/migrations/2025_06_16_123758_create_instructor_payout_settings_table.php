<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('instructor_payout_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instructor_id')->constrained('instructors')->onDelete('cascade');
            $table->enum('payout_frequency', ['weekly', 'fortnightly', 'every_four_weeks'])->default('weekly');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('instructor_payout_settings');
    }
};
