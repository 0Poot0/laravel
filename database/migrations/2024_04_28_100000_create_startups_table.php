<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('startups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo')->nullable();
            $table->text('pitch');
            $table->string('funding_stage');
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->integer('views')->default(0);
            $table->string('website')->nullable();
            $table->string('location')->nullable();
            $table->string('team_size')->nullable();
            $table->date('founded_date')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('startups');
    }
}; 