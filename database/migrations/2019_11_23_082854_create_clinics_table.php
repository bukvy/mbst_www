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
        Schema::create('clinics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name', 100)->nullable()->default('no');
            $table->string('addinfo', 300)->default('no');
            $table->string('contacts', 300)->default('no');
            $table->string('department', 20)->default('0');
           $table->unsignedBigInteger('town_id');
 //          $table->index('town_id',name:'clini_town_idx');
            
//           $table->foreign('town_id',name:'clinic_town_fk')->on('towns')->reference('id');
           $table->foreign('town_id')->references('id')->on('towns');
            
                
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinics');
    }
};
