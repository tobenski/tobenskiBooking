<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('duration')->default(120);
            $table->integer('empty_seats')->default(8);
            $table->integer('turnaround_time')->default(0);
            $table->boolean('contact_via_phone')->default(true);
            $table->boolean('contact_via_email')->default(true);
            $table->boolean('email_confirmation')->default(true);
            $table->boolean('survey')->default(true);
            $table->string('tripadvisor_url')->nullable();
            $table->boolean('end_time')->default(false);
            $table->boolean('allow_cancel')->default(true);
            $table->integer('gdpr_time')->default(12);
            // Online booking settings
            $table->integer('online_min_pax')->default(1);
            $table->integer('online_max_pax')->default(8);
            $table->integer('online_min_time_before')->default(15);
            $table->integer('online_max_time_before')->default(180);
            $table->integer('online_interval')->default(15);
            $table->integer('online_max_book_per_time')->default(0);
            $table->integer('online_max_pax_per_time')->default(0);
            $table->integer('online_max_pax_total')->default(50);
            $table->boolean('online_gather_email')->default(true);
            $table->boolean('online_email_required')->default(true);
            $table->boolean('online_gather_zip')->default(false);
            $table->boolean('online_gather_address')->default(false);
            $table->boolean('online_newsletter')->default(true);
            $table->boolean('online_confirm_duration')->default(false);
            $table->string('online_confirmation_callback')->nullable();
            $table->boolean('online_email_all_book')->default(false);
            $table->boolean('online_email_notes_book')->default(true);
            // Manuel Booking Settings
            $table->boolean('manual_table_suggestion')->default(true);

            $table->softDeletes();
            $table->timestamps();

            $table->foreignId('profile_id');
            $table->foreign('profile_id')
                  ->references('id')->on('profiles')
                  ->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_settings');
    }
}
