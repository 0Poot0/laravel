<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('startups', function (Blueprint $table) {
            $table->decimal('trending_score', 10, 2)->default(0);
        });
    }

    public function down()
    {
        Schema::table('startups', function (Blueprint $table) {
            $table->dropColumn('trending_score');
        });
    }
}; 