<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('hours')->unsigned()->default(0);
            $table->integer('treatment_number')->unsigned()->default(0)->comment(' Treatment number (hip,foot,neck ...)');
            $table->string('card_uid',50)->comment(' Unique ID of the card');
            $table->string('treatment_name',50)->comment(' name of treatemt which lies in .dat file of programmer');
            $table->integer('card_action')->unsigned()->default(0)->comment(' Write full card 1 or deduct hour 2');;
            
            $table->integer('device')->unsigned()->default(0)->comment(' kind of MBST  mbst700, mbst300, .....');;
            $table->unsignedBigInteger('user_id')->comment(' userid from users');;
 //           $table->index('user_id')->unsigned()->default(1);
            
            $table->foreign('user_id',name:'card_user_fk')->on('users')->references('id');
           
              
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
