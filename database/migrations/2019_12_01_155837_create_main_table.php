<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_avatar');
            $table->string('username',20);
            $table->string('password',12);
            $table->string('email',50);
            $table->string('nickname',16);
            $table->timestamps();
        });
        Schema::create('friends', function (Blueprint $table) {
            $table->integer('id_user');
            $table->integer('id_friend');
            $table->timestamps();
        });
        Schema::create('user_group', function (Blueprint $table) {
            $table->integer('id_group');
            $table->integer('id_user');
            $table->timestamps();
        });
        Schema::create('user_post', function (Blueprint $table) {
            $table->integer('id_user');
            $table->string('post',255);
            $table->integer('likes');
            $table->string('link',255);
            $table->bigIncrements('id_post');
            $table->timestamps();
        });
        Schema::create('groups', function (Blueprint $table) {
            $table->bigIncrements('id_group');
            $table->string('nama',50);
            $table->string('deskripsi',255);
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
        Schema::dropIfExists('user');
    }
}
