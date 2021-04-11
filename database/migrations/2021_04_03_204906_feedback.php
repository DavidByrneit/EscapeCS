<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Feedback extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date');
            $table->string('email');
           $table->string('gender');
           $table->string('age');
            $table->string('schoollevel');
            $table->string('country');
            $table->string('subject');
            $table->string('comment');
            $table->integer('q1');
            $table->integer('q2');
            $table->integer('q3');
            $table->integer('q4');
            $table->integer('q5');
            $table->integer('q6');
            $table->integer('q7');
            $table->integer('q8');
            $table->integer('q9');
            $table->integer('q9a');
            $table->integer('q10');
            $table->integer('q11');
            $table->integer('q12');
             $table->integer('q13');
              $table->integer('q14');
               $table->integer('q15');
           
            $table->timestamps();
        });//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('feedback');
    }
}
