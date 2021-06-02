<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbXCountry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_x_country', function (Blueprint $table) {
            // Primary key.
            $table->increments('id');
            // Record timestamps.
            $table->timestampTz('created_at', 6)->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz('updated_at', 6)->nullable()->default(\DB::raw(config('database.updated_at_default')));
            $table->softDeletesTz(6);
            // Table columns.
            $table->string('common_name', 250);
            $table->string('official_name', 250);
            $table->char('iso2_code', 2)->comment('Country code based on ISO 3166-1 alpha-2');
            $table->char('iso3_code', 3)->comment('Country code based on ISO 3166-1 alpha-3');
            $table->string('calling_code', 5)->default('')->comment('Country code for phone number.');
            $table->string('currency_code', 3);
            $table->string('flag_icon_filename', 50)->default('');
            $table->boolean('is_enabled')->default(0);
            $table->boolean('is_hidden')->default(0);
            // Keys.
            $table->index('iso2_code', 'tb_x_country_idx_iso2_code');
            $table->index('iso3_code', 'tb_x_country_idx_iso3_code');
            $table->index('calling_code', 'tb_x_country_idx_calling_code');
        });
        
        $seeder = new Seeder_000001_00_XCountry();
        $seeder->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_x_country');
    }
}
