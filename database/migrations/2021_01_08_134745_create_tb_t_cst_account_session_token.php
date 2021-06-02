<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbTCstAccountSessionToken extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_t_cst_account_session_token', function (Blueprint $table) {
            // Primary key.
            $table->bigIncrements('id');
            // Record timestamps.
            $table->timestampTz('created_at', 6)->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz('updated_at', 6)->nullable()->default(\DB::raw(config('database.updated_at_default')));
            $table->softDeletesTz(6);
            // Table columns.
            $table->unsignedBigInteger('session_id');
            $table->string('access_token', 255);
            $table->timestampTz('access_token_expiry_time', 6);
            $table->string('refresh_token', 255);
            $table->timestampTz('refresh_token_expiry_time', 6);
            // Keys.
            $table->index('session_id', 'tb_t_cst_account_session_token_idx_session_id');
            $table->unique('access_token', 'tb_t_cst_account_session_token_uniq_access_token');
            $table->unique('refresh_token', 'tb_t_cst_account_session_token_uniq_refresh_token');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_t_cst_account_session_token');
    }
}
