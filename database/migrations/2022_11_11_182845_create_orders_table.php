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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shop_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();//edit for diactive user
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();//edit for diactive user
            $table->foreignId('delivery_info_id')->constrained()->restrictOnDelete()->cascadeOnUpdate();
            $table->double('price',2);
            $table->enum('status' , ['pending' ,'approved' , 'rejected'])->default('pending');
            $table->enum('stage' , ['preparing ' ,'onDelivery ' , 'delivered'])->default('preparing');// added at 11-25-2022
            $table->softDeletes();
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
        Schema::dropIfExists('orders');
    }
};
