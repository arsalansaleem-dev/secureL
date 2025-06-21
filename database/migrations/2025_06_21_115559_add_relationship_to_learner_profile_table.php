<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('learner_profiles', function (Blueprint $table) {
            $table->string('relationship', 50)->nullable()->after('user_id');
        });
    }

    public function down()
    {
        Schema::table('learner_profiles', function (Blueprint $table) {
            $table->dropColumn('relationship');
        });
    }

};
