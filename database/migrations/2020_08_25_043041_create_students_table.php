<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//create tableအကြမ်း
    {
        Schema::create('students', function (Blueprint $table) {//table name
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->text('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()//ဖြုတ်ချမယ်
    {
        Schema::dropIfExists('students');//table name
    }
}
