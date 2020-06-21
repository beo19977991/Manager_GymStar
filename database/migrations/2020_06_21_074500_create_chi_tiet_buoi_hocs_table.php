<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietBuoiHocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_buoi_hocs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('buoi_hoc_id')->unsigned();
            $table->foreign('buoi_hoc_id')->references('id')->on('buoi_hocs');
            $table->integer('loai_bai_tap_id')->unsigned();
            $table->foreign('loai_bai_tap_id')->references('id')->on('loai_bai_taps');
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
        Schema::dropIfExists('chi_tiet_buoi_hocs');
    }
}
