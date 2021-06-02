<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbXConfigItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_x_config_item', function (Blueprint $table) {
            // Primary key.
            $table->string('id', 50);
            // Record timestamps.
            $table->timestampTz('created_at', 6)->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz('updated_at', 6)->nullable()->default(\DB::raw(config('database.updated_at_default')));
            $table->softDeletesTz(6);
            // Table columns.
            $table->string('group_id', 50);
            $table->string('type', 10)->comment('Values are "string", "integer", "long", "float", "double", "boolean".');
            $table->string('value', 1000);
            $table->smallInteger('sequence')->default(0);
            // Keys.
            $table->primary('id');
            $table->index('group_id', 'tb_x_config_item_idx_group_id');
        });
        
        $seeder = new Seeder_000003_00_XConfigItem();
        $seeder->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_x_config_item');
    }
}
