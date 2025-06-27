<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{   
    public function up()
    {
        Schema::table('instructors', function (Blueprint $table) {
            $table->string('description_type')->nullable();
            $table->string('subject')->nullable();
            $table->text('message')->nullable();
        });
    }

    public function down()
    {
        Schema::table('instructors', function (Blueprint $table) {
            $table->dropColumn(['description_type', 'subject', 'message']);
        });
    }
};
