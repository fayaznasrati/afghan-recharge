<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBundlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bundles', function (Blueprint $table) {
            $table->id();
            $table->string('operator');
            $table->string('bundleType');
            $table->string('pakName_en');
            $table->string('pakName_ps');
            $table->string('pakName_fa');
            $table->string('price');
            $table->string('quota');
            $table->string('code');
            $table->string('pakDetails_en')->nullable();
            $table->string('pakDetails_ps')->nullable();
            $table->string('pakDetails_fa')->nullable();
            $table->tinyInteger('status')->default('1');
            $table->string('validity');
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
        Schema::dropIfExists('bundles');
    }
}
