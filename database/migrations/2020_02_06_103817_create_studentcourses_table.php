<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentcoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentcourses', function (Blueprint $table) {
            $table->integer('studentid', false, true)->nullable(false);
            $table->integer('courseid', false, true)->nullable(false);
            $table->smallInteger('year')->unsigned()->nullable(false);
            $table->tinyInteger('semester')->unsigned()->nullable(false);
            $table->decimal('grade', 2, 1)->unsigned()->nullable(true);
            $table->timestamps();
            $table->unique(['studentid','courseid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentcourses');
    }
}
