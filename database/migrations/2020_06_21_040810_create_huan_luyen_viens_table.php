<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuanLuyenViensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huan_luyen_viens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mon_hoc_id');
            $table->string('ho_ten');
            $table->string('email')->unique();
            $table->string('mat_khau');
            $table->integer('tuoi')->unsigned();
            $table->string('dia_chi');
            $table->integer('gioi_tinh');
            $table->string('anh_dai_dien');
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
        Schema::dropIfExists('huan_luyen_viens');
    }
}
