<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id');
            $table->string('sikayet_numarasi')->nullable();
            $table->string('file')->nullable();

            $table->string('nereye')->nullable();
            $table->string('kime')->nullable();

            $table->longtext('text')->nullable();

            $table->string('baslik')->nullable();
            $table->string('firma')->nullable();
            $table->string('adsoyad')->nullable();
            $table->string('adres')->nullable();
            $table->string('vergidaire')->nullable();
            $table->string('vergino')->nullable();
            $table->string('telefon')->nullable();
            $table->string('email')->nullable();


            $table->integer('send_email')->default(0);
            $table->integer('send_sms')->default(0);

            $table->integer('emailCount')->default(0);
            $table->integer('smsCount')->default(0);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('complaints');
    }
};
