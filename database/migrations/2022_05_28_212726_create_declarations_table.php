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
        Schema::create('declarations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',150);
            $table->integer('user_id')->nullable();
            $table->string('phone',20)->nullable();
            $table->string('description')->nullable();
            $table->string('image',75)->nullable();
            $table->text('detail')->nullable();
            $table->string('slug',100)->nullable();
            $table->string('status',5)->nullable()->default('New');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('declarations');
    }
};
