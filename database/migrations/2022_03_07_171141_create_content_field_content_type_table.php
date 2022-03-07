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
        Schema::create('content_field_content_type', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('content_field_id');
            $table->foreign('content_field_id')
                ->references('id')
                ->on('content_fields');
            $table->unsignedBigInteger('content_type_id');
            $table->foreign('content_type_id')
                ->references('id')
                ->on('content_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_field_content_type');
    }
};
