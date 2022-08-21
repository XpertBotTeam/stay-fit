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
        //
        Schema::create('services',function(Blueprint $table){
           $table->id();
           $table->foreignId('user_id');
            $table->date('consultation');
            $table->string('customizedmealplan');
            $table->boolean('meallocation');
            $table->string('healthcoaching');
            $table->string('mealsordessert');
            $table->string('stayfit');
             
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
        //
    }
};
