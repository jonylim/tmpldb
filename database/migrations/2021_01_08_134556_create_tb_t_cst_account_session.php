<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbTCstAccountSession extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_t_cst_account_session', function (Blueprint $table) {
            // Primary key.
            $table->bigIncrements('id');
            // Record timestamps.
            $table->timestampTz('created_at', 6)->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz('updated_at', 6)->nullable()->default(\DB::raw(config('database.updated_at_default')));
            $table->softDeletesTz(6);
            // Table columns.
            $table->unsignedBigInteger('account_id');
            $table->string('platform', 25)->comment('The platform which the user log in from.');
            $table->string('device_model', 250)->default('');
            $table->string('device_id', 250)->default('');
            $table->text('user_agent')->comment('The user agent at login time.');
            $table->string('ip_address', 50)->comment('The IP address at login time.');
            $table->timestampTz('logout_time', 6)->nullable();
            // Keys.
            $table->index('account_id', 'tb_t_cst_account_session_idx_account');
            $table->index('device_id', 'tb_t_cst_account_session_idx_device_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_t_cst_account_session');
    }
}
