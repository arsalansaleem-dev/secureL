<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('instructor_billing_info', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instructor_id')->constrained('instructors')->onDelete('cascade');
            $table->string('business_name')->nullable();
            $table->string('abn', 50)->nullable(); // Australian Business Number
            $table->text('billing_address')->nullable();
            $table->boolean('gst_registered')->default(false);
            $table->string('suburb', 100)->nullable();
            $table->string('postcode', 10)->nullable();
            $table->string('state', 50)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('instructor_billing_info');
    }
};
