<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbTCstAccountOtp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_t_cst_account_otp', function (Blueprint $table) {
            // Primary key.
            $table->bigIncrements('id');
            // Record timestamps.
            $table->timestampTz('created_at', 6)->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz('updated_at', 6)->nullable()->default(\DB::raw(config('database.updated_at_default')));
            $table->softDeletesTz(6);
            // Table columns.
            $table->unsignedBigInteger('account_id');
            $table->string('key', 32);
            $table->string('code', 32);
            $table->string('action', 25)->comment('The action which triggers the OTP verification (e.g.: "login").');
            $table->string('method', 25)->comment('Values are "email" or "phone".');
            $table->string('email', 500)->nullable();
            $table->integer('country_id')->default(0);
            $table->string('country_calling_code', 5)->default('')->comment('Country code for phone number.');
            $table->string('phone', 20)->nullable()->comment('Phone number without country code.');
            $table->string('phone_with_code', 25)->nullable()->comment('Country code + phone number.');
            $table->timestampTz('expiry_time', 6);
            $table->smallInteger('send_count')->default(1)->comment('How many times the OTP has been sent.');
            $table->smallInteger('attempt_count')->default(0)->comment('Number of attempts to verify the OTP.');
            $table->boolean('is_verified')->default(0)->comment('If the OTP is verified successfully.');
            // Keys.
            $table->index('account_id', 'tb_t_cst_account_otp_idx_account');
            $table->index('email', 'tb_t_cst_account_otp_idx_email');
            $table->index('phone', 'tb_t_cst_account_otp_idx_phone');
            $table->index('phone_with_code', 'tb_t_cst_account_otp_idx_phone_with_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_t_cst_account_otp');
    }
}
