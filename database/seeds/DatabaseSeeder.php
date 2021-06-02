<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Seeder_000001_00_XCountry::class);
        $this->call(Seeder_000002_00_XAPIKey::class);
        $this->call(Seeder_000003_00_XConfigItem::class);
    }
}
