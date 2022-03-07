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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body')->nullable();
            $table->boolean('visible')->default(false);
            $table->unsignedBigInteger('person_id')->nullable();
            $table->foreign('person_id')
                ->references('id')
                ->on('people')
                ->nullOnDelete();
            $table->unsignedBigInteger('category_content_id')->nullable();
            $table->foreign('category_content_id')
                    ->references('id')
                    ->on('category_contents')
                    ->nullOnDelete();
            $table->unsignedBigInteger('content_type_id')->nullable();
            $table->foreign('content_type_id')
                    ->references('id')
                    ->on('content_types')
                    ->nullOnDelete();
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
        Schema::dropIfExists('contents');
    }
};
