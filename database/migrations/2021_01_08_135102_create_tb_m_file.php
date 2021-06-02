<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbMFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_m_file', function (Blueprint $table) {
            // Table columns.
            $table->bigIncrements('id');
            $table->string('owner_type', 25)->comment('The owner type (e.g.: "cst_account", "cst_project", etc.).');
            $table->unsignedBigInteger('owner_id')->comment('The ID of the owner (e.g.: account ID, project ID, etc.).');
            $table->string('category', 20)->comment('The category (e.g.: "photo").');
            $table->string('filename', 60)->comment('The stored filename.');
            $table->string('original_filename', 255);
            $table->string('media_type', 255)->comment('The media type (e.g.: "image/jpeg").');
            $table->string('file_ext', 10)->comment('The file\'s extension (if any).');
            $table->integer('file_size')->comment('The file\'s size, in bytes.');
            $table->integer('width')->default(0)->comment('The width, in pixels (if any).');
            $table->integer('height')->default(0)->comment('The height, in pixels (if any).');
            $table->string('thumbnail_media_type', 255)->default('');
            $table->string('thumbnail_file_ext', 10)->default('');
            $table->integer('thumbnail_file_size')->default(0);
            $table->integer('thumbnail_width')->default(0);
            $table->integer('thumbnail_height')->default(0);
            $table->string('storage', 20)->comment('The storage where the file is stored in (e.g.: "gcs" or "s3").');
            $table->boolean('is_encrypted')->comment('If the file is encrypted.');
            $table->string('encrypt_key', 260)->default('');
            $table->string('uploader', 100)->comment('The uploader (e.g.: "cst_account:1").');
            // Record timestamps.
            $table->timestampTz('created_at', 6)->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestampTz('updated_at', 6)->nullable()->default(\DB::raw(config('database.updated_at_default')));
            $table->softDeletesTz(6);
            // Keys.
            $table->unique([ 'owner_type', 'category', 'filename' ], 'tb_m_file_uniq_ownertype_category_filename');
            $table->index([ 'owner_type', 'owner_id', 'category' ], 'tb_m_file_idx_owner_category');
            $table->index([ 'uploader' ], 'tb_m_file_idx_uploader');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_m_file');
    }
}
