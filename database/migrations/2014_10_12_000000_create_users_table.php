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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('otp')->nullable();
            $table->string('phone')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('image')->nullable();
            $table->enum('usertype', ['user', 'sponsor_admin'])->nullable();
            $table->string('registration_code')->nullable();
            $table->string('company_name')->nullable();
            $table->string('nimc')->nullable();
            $table->string('bvn')->nullable();
            $table->string('face_image')->nullable();
            $table->string('lga_of_origin')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->boolean('isVerified')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

};
