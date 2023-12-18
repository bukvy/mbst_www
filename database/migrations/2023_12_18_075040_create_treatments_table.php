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
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('cardnumber')->unsigned()->default(0)->comment("number of card inside device");
            $table->integer('correctcardnumber')->unsigned()->default(0)->comment("number of cardnumber with deduct of constant if thereis in device");
            $table->string('namefrdevice')->nullable()->default('Лечение из устройства')->comment("the name of treament get from  device");
            $table->string('name', 50)->nullable()->default('Лечение')->comment("the name of treament set inside db");;
            $table->string('comment', 300)->nullable()->default('Для разных mbst добавляется доп число к номеру карты для старых аппаратов');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treatments');
    }
};
