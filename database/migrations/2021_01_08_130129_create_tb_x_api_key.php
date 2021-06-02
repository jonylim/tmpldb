<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbXApiKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_x_api_key', function (Blueprint $table) {
            // Primary key.
            $table->increments('id');
            // Record timestamps.
            $table->timestampTz('created_at', 6)->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz('updated_at', 6)->nullable()->default(\DB::raw(config('database.updated_at_default')));
            $table->softDeletesTz(6);
            // Table columns.
            $table->string('api_key_id', 255);
            $table->string('api_key_secret', 255);
            $table->string('domain', 25)->comment('Values are "customer" or "internal".');
            $table->string('app_platform', 25)->comment('Values are "server", "web", etc.');
            $table->string('app_identifier', 250)->comment('The package name for Android, bundle ID for iOS, or origin URL for web.');
            $table->timestampTz('expiry_time');
            $table->boolean('is_enabled')->default(1)->comment('If the API key is enabled.');
            // Keys.
            $table->unique('api_key_id', 'tb_x_api_key_uniq_api_key_id');
            $table->index('domain', 'tb_x_api_key_idx_domain');
            $table->index('app_identifier', 'tb_x_api_key_idx_app_identifier');
        });
        
        $seeder = new Seeder_000002_00_XAPIKey();
        $seeder->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_x_api_key');
    }
}
