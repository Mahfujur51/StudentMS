<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('fname');
            $table->string('mname');
            $table->string('distric');
            $table->integer('roll')->unsing();
            $table->string('dept');
            $table->string('email');
            $table->string('password');
            $table->text('description');
            $table->integer('status')->default(1);
            $table->string('image')->default('defalut.png');
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
        Schema::dropIfExists('students');
    }
}
