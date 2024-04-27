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
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('state')->nullable();
            $table->string('phone')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }


};
