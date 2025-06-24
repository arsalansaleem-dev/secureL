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
       // Add vehicle_id to instructors
        Schema::table('instructors', function (Blueprint $table) {
            $table->foreignId('vehicle_id')
                  ->nullable()
                  ->constrained('vehicles')
                  ->nullOnDelete();
        });

        // Add package_id to bookings
        Schema::table('bookings', function (Blueprint $table) {
            $table->foreignId('package_id')
                  ->nullable()
                  ->constrained('packages')
                  ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         // Remove foreign key and column from instructors
        Schema::table('instructors', function (Blueprint $table) {
            $table->dropForeign(['vehicle_id']);
            $table->dropColumn('vehicle_id');
        });

        // Remove foreign key and column from bookings
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropForeign(['package_id']);
            $table->dropColumn('package_id');
        });
    }
};
