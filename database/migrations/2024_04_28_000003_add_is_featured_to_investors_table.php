<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('investors', function (Blueprint $table) {
            $table->boolean('is_featured')->default(false)->after('bio');
        });
    }

    public function down()
    {
        Schema::table('investors', function (Blueprint $table) {
            $table->dropColumn('is_featured');
        });
    }
}; 