<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default(0);
            $table->string('phone')->required()->min(10)->max(13);
            $table->string('email')->required()->min(5)->max(50);
            $table->string('name')->required()->min(5);
            $table->string('title')->required()->min(10)->max(20);
            $table->string('body')->required()->min(10)->max(250);
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
        Schema::dropIfExists('contacts');
    }
}
