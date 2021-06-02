<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbMCstAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_m_cst_account', function (Blueprint $table) {
            // Primary key.
            $table->bigIncrements('id');
            // Record timestamps.
            $table->timestampTz('created_at', 6)->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz('updated_at', 6)->nullable()->default(\DB::raw(config('database.updated_at_default')));
            $table->softDeletesTz(6);
            // Table columns.
            $table->string('full_name', 250);
            $table->string('email', 250)->nullable();
            $table->boolean('is_email_verified')->default(0);
            $table->integer('country_id')->default(0);
            $table->string('country_calling_code', 5)->default('')->comment('Country code for phone number.');
            $table->string('phone', 20)->nullable()->comment('Phone number without country code.');
            $table->string('phone_with_code', 25)->nullable()->comment('Country code + phone number.');
            $table->boolean('is_phone_verified')->default(0);
            $table->string('password', 128)->default('');
            $table->string('password_salt', 10)->default('');
            $table->boolean('use_2fa')->default(0);
            $table->string('photo_filename', 250)->default('');
            $table->timestampTz('last_login_time', 6)->nullable();
            $table->timestampTz('last_activity_time', 6)->nullable();
            $table->boolean('is_password_change_required')->default(0);
            // Keys.
            $table->index('full_name', 'tb_m_cst_account_idx_full_name');
            $table->index('email', 'tb_m_cst_account_idx_email');
            $table->index('phone', 'tb_m_cst_account_idx_phone');
            $table->index('phone_with_code', 'tb_m_cst_account_idx_phone_with_code');
            if (env('DB_CONNECTION') == 'pgsql') {
                $table->index([ \DB::raw('LOWER(full_name)') ], 'tb_m_cst_account_idx_full_name_lower');
                $table->index([ \DB::raw('LOWER(email)') ], 'tb_m_cst_account_idx_email_lower');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_m_cst_account');
    }
}
