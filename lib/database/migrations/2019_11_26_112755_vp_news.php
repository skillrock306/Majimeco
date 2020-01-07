<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VpNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_news', function (Blueprint $table) {
            $table->Increments('new_id');
            $table->string('new_title');
            $table->string('new_slug');
            $table->string('new_brief');
            $table->longtext('new_description');
            $table->string('new_img');
            $table->tinyInteger('new_highlight');
            $table->Integer('new_numberviews');
            $table->Integer('new_cate')->unsigned();
            $table->foreign('new_cate')
                  ->references('cate_id')
                  ->on('vp_categories')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('vp_news');
    }
}
