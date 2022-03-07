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
        Schema::create('content_fields', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
        });

        Schema::create('content_content_field', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('content_id');
            $table->foreign('content_id')
                ->references('id')
                ->on('contents');
            $table->unsignedBigInteger('content_tag_id');
            $table->foreign('content_tag_id')
                ->references('id')
                ->on('content_tags');
            $table->string('value')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_content_field');
        Schema::dropIfExists('content_fields');
    }
};
