<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->smallInteger('priority')->default(0);
            $table->integer('seats');

            $table->softDeletes();
            $table->timestamps();

            $table->foreignId('room_id');
            $table->foreign('room_id')
                  ->references('id')->on('rooms')
                  ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('profile_id');
            $table->foreign('profile_id')
                  ->references('id')->on('profiles')
                  ->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables');
    }
}
