<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->string('zip')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->default('Denmark (Danmark) (+45)');

            $table->string('lang')->default('Dansk');
            $table->string('timezone')->default('(GMT +01:00) Brussels, Copenhagen, Madrid, Paris');
            $table->boolean('24_hour')->default(true);

            $table->string('password');

            //$table->foreignId('current_team_id')->nullable();
            $table->text('logo')->nullable();

            $table->boolean('active')->default(false);
            $table->boolean('admin')->default(false);

            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}
