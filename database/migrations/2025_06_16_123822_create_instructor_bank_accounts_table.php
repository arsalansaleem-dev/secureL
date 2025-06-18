<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('instructor_bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instructor_id')->constrained('instructors')->onDelete('cascade');
            $table->string('account_name');
            $table->string('account_number', 50);
            $table->string('bsb', 20); // Bank-State-Branch (used in AUS)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('instructor_bank_accounts');
    }
};
