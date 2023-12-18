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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('no');
            $table->string('fio')->default('no');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->bigInteger('permission')->default(0)->comment('Маска доступа 0 минимальный доступ биты разрешения того или  иного действия'); 
            $table->string('comment',300)->default('no');
            $table->string('phone', 30)->nullable()->comment('Телефон пользователя, только цифры');            
            $table->string('contacts', 300)->nullable()->comment('Другие контакты');            
            $table->string('avatar')->nullable()->comment('URN к пользовательскому изображению');
            $table->timestamps();

            $table->unsignedBigInteger('clinic_id');
            //          $table->index('town_id',name:'clini_town_idx');
                       
           //           $table->foreign('town_id',name:'clinic_town_fk')->on('towns')->reference('id');
            $table->foreign('clinic_id',name:'user_clinic_fk')->references('id')->on('clinics');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
