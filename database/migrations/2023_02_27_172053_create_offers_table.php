<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id');

            $table->string('company_name')->nullable();
            $table->string('company_officer')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('company_email')->nullable();

            $table->longText('content')->nullable();

            $table->integer('send_email')->default(0);
            $table->integer('send_sms')->default(0);

            $table->timestamps();
            $table->softDeletes();

        });
    }

    public function down()
    {
        Schema::dropIfExists('offers');
    }
};
