<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // email parts: {64}@{255}
        // https://stackoverflow.com/questions/386294/what-is-the-maximum-length-of-a-valid-email-address/44317754
        // password: https://security.stackexchange.com/questions/189213/bcrypt-data-type-and-length
        // config/hashing ==> default is bcrypt
        // https://laravel.com/docs/6.x/authentication#remembering-users
        // https://laravel.com/docs/6.x/verification

        // best way : https://stackoverflow.com/questions/42244541/laravel-migration-error-syntax-error-or-access-violation-1071-specified-key-wa/46262128
        Schema::create('users', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('firstname', 20);
            $table->string('lastname', 60);
            $table->string('email', 100)->unique();
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
