<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // Disini kita membuat fungsi menambahkan tabel pada database 'db_laravel' yang sudah kita tambahkan di .env
        // dengan nama "profile" dan beberapa nama kolom sebgai berikut : id, address, nomertlp, ttl, foto 
        Schema::create('profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address');
            $table->string('nomer_tlp');
            $table->date('ttl');
            $table->string('foto');
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
        Schema::dropIfExists('detail__profiles');
    }
};