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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name');
            $table->string('email')->unique();
            $table->string('city');
            $table->integer('phone_number');
            $table->integer('wallet_account')->unique();
            $table->string('password');
            $table->string('profile_photo');
            $table->time('open_time');
            $table->time('close_time');
            $table->string('address');
            $table->enum('status' , ['pending' ,'approved' , 'rejected'])->default('pending');//for admin dashboard
            $table->foreignId('category_id')->constrained()->restrictOnDelete();
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('shops');
    }
};
