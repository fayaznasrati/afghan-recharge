<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBundleActivationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bundle_activations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bundle_id')->required();
            $table->string('status')->default(0);
            $table->string('phone')->required()->min(10)->max(13);
            $table->string('email')->nullable();
            $table->string('price')->required();
            $table->string('sender_phone')->nullable();
            $table->foreign('bundle_id')->references('id')->on('bundles')->onDelete('cascade');
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
        Schema::dropIfExists('bundle_activations');
    }
}
