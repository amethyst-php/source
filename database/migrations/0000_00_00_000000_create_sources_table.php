<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateSourcesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.source.data.source.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('vendor');
            $table->string('uid')->nullable();
            $table->string('url')->nullable();
            $table->integer('weight')->default(0);
            $table->string('sourceable_type');
            $table->integer('sourceable_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.source.data.source.table'));
    }
}
