<?php

use Illuminate\Database\Seeder;

class Seeder_000003_00_XConfigItem extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            'is_maintenance' => [
                'group_id' => 'system',
                'type'     => 'boolean',
                'value'    => '0',
                'sequence' => 1
            ]
        ];
        
        foreach ($items as $id => $item) {
            DB::table('tb_x_config_item')->updateOrInsert([ 'id' => $id ], $item);
        }
    }
}
