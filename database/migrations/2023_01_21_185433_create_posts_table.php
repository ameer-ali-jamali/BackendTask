<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->unique();
            $table->integer('userId');
            $table->string('title');
            $table->string('time');
            $table->string('price');
            $table->string('hr')->default('hr');
            $table->string('country');
            $table->string('description');
            $table->string('first_skill')->default('Learning');
            $table->string('second_skill')->default('Learning');
            $table->string('third_skill')->default('Learning');
            $table->string('fourth_skill')->default('Learning');
            $table->string('fifth_skill')->default('Learning');
            $table->timestamp('timeStamp')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};