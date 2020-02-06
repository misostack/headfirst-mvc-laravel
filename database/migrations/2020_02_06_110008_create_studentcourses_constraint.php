<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentcoursesConstraint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('studentcourses', function (Blueprint $table) {
            $table->foreign('studentid')
                    ->references('id')
                    ->on('students')
                    ->onDelete('cascade');
            $table->foreign('courseid')
                    ->references('id')
                    ->on('courses')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('studentcourses', function (Blueprint $table) {
            $table->dropForeign(['studentid']);
            $table->dropForeign(['courseid']);
        });
    }
}
