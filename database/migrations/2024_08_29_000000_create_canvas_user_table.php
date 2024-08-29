<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCanvasUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canvas_users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique()->nullable();
            $table->string('password');
            $table->text('summary')->nullable();
            $table->string('avatar')->nullable();
            $table->tinyInteger('dark_mode')->nullable();
            $table->tinyInteger('digest')->nullable();
            $table->string('locale')->nullable();
            $table->tinyInteger('role')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canvas_users');
    }
}
