<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coaches', function (Blueprint $table) {
            $table->id()->comment('コーチID');
            $table->integer('category_id')->comment('ジャンルID');
            $table->string('profile_image')->default('default.png');
            $table->string('name')->comment('名前');
            $table->string('personalities')->comment('性格診断');
            $table->string('license')->comment('資格');
            $table->text('career')->comment('経歴');
            $table->integer('stars')->default(0)->comment('星');
            $table->text('comment')->comment('コメント');
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
        Schema::dropIfExists('coaches');
    }
};


 
