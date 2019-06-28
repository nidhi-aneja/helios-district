<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('role')->nullable();
            $table->string('fullname')->nullable();
            $table->integer('phone')->unsigned()->nullable();
            $table->string('shopName')->nullable();
            $table->string('country')->nullable();
             $table->string('address')->nullable();
            $table->string('city')->nullable(); 
            $table->string('workplace')->nullable();
            $table->text('sellingInformation')->nullable();
            $table->string('mode')->nullable();
            $table->integer('cardnumber')->nullable();
            $table->date('expiry')->nullable();
            $table->integer('ccv')->nullable(); 
            
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
